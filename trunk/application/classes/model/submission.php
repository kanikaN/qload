<?php
/**
Model for halding submission in the system
1.Handle submission creation
2.Handles submission edit
3.Handles submission meta
4.Handles submission to content association
5.Handles status of subissions

*/
class Model_Submission extends ORM {
    
	/**
	Handles various states of submissions
	*/
	const STATUS_DRAFT = "DRAFT";
	const STATUS_PUBLISHED = "PUBLISHED";
	const STATUS_TRASH = "TRASH";
	const STATUS_DELETE = "DELETE";
	/**
	@var array list of content that the submission holds
	*/
	var $content_list = null;
	/**
	Rules to be validated before creating/ updating a submisson
	*/
    public function rules() {
    	return array(
        'title' => array(
            array('not_empty')
          ));
    }
    
    /**
    Handles the submission creation from a request 
    @param array REQEST object 
    
    Checks the content present the the REQUEST object Creates the 
    submission meta information ,
    	a.title
    	b.description
    	c.created time
    	d.modified time
    	e.correspoding stimulus if present
    	f.the default genre associated with submission
    	g.owner of the submisson
    	h.status of the submission
    
    */
     
	public function create_from_request($data) {
	
		$this->title = @$data['title'];
		$errors = array();
		if (isset($data['text_content'])) {
			$this->description = substr(strip_tags($data['text_content']),0,50);
		} else {
			$this->description = strip_tags(@$data['description']);
		}
		
		$this->created_at = time();
		$this->modified_at = time();
		if (isset($data['stimulus_id'])) {
			$this->stimulus_id = @$data['stimulus_id'];
		}
		if (isset($data['genre_id']) ) {
			$this->default_genre_id = @$data['genre_id'];
		}
		
		$this->owner_id = Session::instance()->get('user_id');
		$this->status = self::STATUS_DRAFT;
		
		try {
			$this->save();
		} catch (ORM_Validation_Exception $e) {
			$errors = $e->errors('models');
			return $errors;
		}
		
		if (isset($data['genre_id']) ) {
			$assoc =  new Model_Submission_Genre();
			$assoc->genre_id = $data['genre_id'];
			$assoc->submission_id = $this->id;
			$assoc->save();
		}
		return $errors;
	}
	/**
	Updates information about the submission 
	@param array REQUEST object 
	*/
	public function update_info($data) {
		$this->title = @$data['title'];
		if (isset($data['text_content'])) {
			$this->description = substr(strip_tags($data['text_content']),0,50) ;
		} else {
			$this->description = @$data['description'];
		}
		try {
			$this->save();
		} catch (ORM_Validation_Exception $e) {
			$errors = $e->errors('models');
			return $errors;
		}
		return null;
		
	}
	
	/**
	Adds content to the submission
	@param Model_Content the content to be added to the submission
	
	Checks whetehr the content is already added to the submission in 
	that case ignores it else adds a new association of type
	Model_Submission_Content
	*/
	public function add_content($content) {
		$this->load_content();
		
		foreach($this->content_list as $cont) {
			if ($content->id == $cont->id) {
				return;
			}
		}
		
		$assoc = new Model_Submission_Content();
		$assoc->content_id = $content->id;
		$assoc->submission_id = $this->id;
		$assoc->save();
	}
	
	/**
	returns the content list associated with a sumbission
	@param boolean Force reload of submission from the table
	*/
	public function get_content_list($force = false) {
		if ($force) {
			$this->content_list = null;
		}
		$this->load_content();
		return $this->content_list;
	}
	/**
	Loads the content associated with a submission and populate the content_list
	*/
	public function load_content() {	
		if ($this->content_list != null) {
			return;
		}
		$this->content_list = array();
		if ($this->loaded()) {
			$list = ORM::factory('content')
			->join('submission_contents','LEFT')
			->on('content.id','=','submission_contents.content_id')
			->where('submission_contents.submission_id' ,'=', $this->id)
			->find_all();
			foreach($list as $content) {
				$this->content_list[] = $content;
			}
        }
	}
	
	/**
	Handles submission creation + Edit
	@param Controller Refrence to the controller object
	
	Handles the submission creation + Edit workflow by looking at the request
	Workflow
	
	1.A sumbission created is in the DRAFT Mode initially. 
	2.Submissions can be published by the user to be made visible to others
	3.Published submissions can only be deleted by the user
		delete submissions go to the trash
	4.User can delete a submission from trash - thats not displayed to the user 
		any more
	*/
	public  function handle_submission_create_edit($controller) {
		$errors = null;
		if ($this->status  == self::STATUS_PUBLISHED) {
			$controller->show_info_message("You Can't Edit a published Entry");
			return $errors;
		} else 	if (isset($_REQUEST['draft']) || isset($_REQUEST['publish'])   ) {
			if (!$this->loaded()) {
				$errors = $this->create_from_request($_REQUEST);
				if(!empty($errors)) {
					$controller->add_activity_result($this->id);
				}
			} else {
				$errors = $this->update_info($_REQUEST);
			}
			
			$locker = new Model_Locker($controller->user);
    		if (!empty($errors)) {
    			//if there are errors dont process the content
    		} else	if (isset($_REQUEST['text_content'])) {
    			$content = $locker->add_text_content($_REQUEST);
    			$this->add_content($content);
			} else if (count($_FILES) > 0) {
			
				$contentList = $locker->add_file_content($_FILES,$_REQUEST,$errors);
				foreach($contentList as $content) {
					$this->add_content($content);
				}
			}
			$this->status = self::STATUS_DRAFT;
			$this->modified_at = time();
			try {
				$this->save();
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('models');
				return $errors;
			}
			$controller->show_info_message("Your changes are saved in draft Mode,");
						
		} else if (isset($_REQUEST['remove'])) {
			$assoc = ORM::factory('submission_content')
			->where('submission_id','=',$this->id)
			->and_where('content_id','=',$_REQUEST['remove'])
			->find();
			if ($assoc->loaded()) {
				$assoc->delete();
			}
		}  
		if (isset($_REQUEST['publish'])) {
			if ($this->loaded()) {
				$rule = null;
				if (!empty($this->stimulus_id) ) {
					$rule = ORM::factory('stimulus',$this->stimulus_id);
					if (!$rule->loaded()) {
						$rule = null;
					}
				} else {
					$rule = ORM::factory('genre',$this->default_genre_id);
					if(!$rule->loaded()) {
						$rule = null;
					}
				}
				
				if (!empty($rule)) {
					$content_list = $this->get_content_list();
					$image_file_count = 0;
					$video_file_count = 0;
					$audio_file_count = 0;
					$total_file_count = 0;
					foreach($content_list as $content) {
						switch($content->type) {
						case 'text':
							$text = $content->text_content;
							$chars = strip_tags($text);
							$chars = preg_replace('/&nbsp;/',' ',$chars);
							$words = preg_split('[ ]',$chars);
							
						//	echo "word count:".count($words). " chars: ".strlen($chars);
							if ($rule->text_supported == 140 && 
								strlen($chars) > 140 ) {
								$errors['text_content'] = "The Entry cannot be published as the number of characters  exceeds the limit {$rule->text_supported}";
							}
							if ($rule->text_supported == 1000 && 
								count($words) > 100) {
								$errors['text_content'] = "The Entry cannot be published as the number of words exceeds the limit 100 words";
							}
							break;
						
						case 'image':
							$image_file_count++;
							$total_file_count++;
							break;
						case 'video':
							$video_file_count++;
							$total_file_count++;
							break;
						
						case 'audio':
							$audio_file_count++;
							$total_file_count++;
							break;
						}
					}
					
					if ($rule->image_supported
						+ $rule->video_supported
						+ $rule->audio_supported > 0 && $total_file_count == 0 )  {
						$errors['content_file'] = 
						'Please add file/s before publishing the content';
					}
					
				}
				if (empty($errors)) {
					$this->status = self::STATUS_PUBLISHED;
					
					$controller
						->show_info_message("Your entry is now visible to public");
					$controller->add_activity_result($this->id);
				}
				$this->save();
			}
		}
		return $errors;
	}
	/**
	Removes a submission from from the published state or from drafts
	@param Controller Controller which invokes the action
	*/
	public function remove_submission($controller) {
	
		//No such submission
		if (!$this->loaded()){
			return false;
		}
		//Hmmm you cant remove someone elses sumbission
		if ($this->owner_id != $controller->user->id) {
			return false;
		}
		
		if ($this->status != self::STATUS_TRASH) {
			$this->status = self::STATUS_TRASH;
    		$controller->set_session_message("Entry Moved To trash");
    	} else {
    		$this->status = self::STATUS_DELETE;
    		$controller->set_session_message("Entry removed from trash");
    	}
    	$this->save();
		
	}	
	
}
