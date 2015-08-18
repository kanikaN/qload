<?php 
defined('SYSPATH') or die('No direct script access.');
class Controller_Stimulus extends Controller_Core_Filter {
	
	
	/**
	Sets the left sidebar for the stimulus;
	*/
	protected function set_stimulus_menu($stimulus) {
		$this->_main_menu = array();
    	$this->_main_menu['view'] = 
    		new  Model_Ui_Menuitem("View","/stimulus/view/{$stimulus->id}");
    		
    	$this->_main_menu['participate'] = new Model_Ui_Menuitem(
    		 "Participate","/stimulus/participate/{$stimulus->id}");
        $this->_main_menu[$this->request->action()]->active = true;
	}
	
	/**
	Action for listing all the stimulus present in a channel .
	*/
	public function action_index() {
    	
    	$this->set_filters();
    	/*
    	SELECT *  , stimulus.id as stimulus_id FROM `stimulus` 
    	LEFT JOIN `contents` ON (`stimulus`.`content_id` = `contents`.`id`)
    	LEFT JOIN `generated_contents` ON (`generated_contents`.`parent_id` = `contents`.`id`)
    	WHERE `generated_contents`.`preset_type` = 'thumb_X_150' or stimulus.content_id is NULL 
    	*/
    	$query = DB::select(array('stimulus.id','stimulus_id'),'stimulus.*','generated_contents.*')
    	->from('stimulus')
    	->join('contents',"LEFT")
    	->on('stimulus.content_id','=','contents.id')
    	->join('generated_contents',"LEFT")
    	->on('generated_contents.parent_id','=','contents.id')
        ->where_open()
        	->where('stimulus.content_id','IS',NULL)
        	->or_where('generated_contents.preset_type','=', 
        		Model_Content_Viewable::PRESET_THUMB_X_150)
         ->where_close();
    	
    	 
        if ($this->channel) {
        	$query->and_where("channel_id","=" , $this->channel->id);
        }
        
        if ($this->filter_type == 'genre') {
			$query->and_where('genre_id',"=",$this->_main_menu[$this->filter_value]->id);
	    }
	    
	    $this->page_config['base_url'] = "/stimulus/index/{$this->filter_type}_{$this->filter_value}/";
	    $pagination_query = clone $query;
	    
	    $count = $pagination_query->select('COUNT("*") AS mycount')->execute()->get('mycount');
	    
	    //$count = 10;
		$this->page_config['total_pages'] = ceil($count/ $this->page_config['page_size'] ) ;
       
		$list = $query
		//->select('stimulus.id as stimulus_id,simulus.*, generated_contents.*')
	    //->order_by('stimulus.modified_at','DESC')
	    ->limit($this->page_config['page_size'])
	    ->offset(($this->page -1) * $this->page_config['page_size'])
	    ->as_object()->execute();
	    $this->_view = new View("stimulus/list", array("list"=>$list));
	}
	/**
	Show a stimulus 
	does book keeping actions
	*/
	public function action_view() {
    	$stimulus = ORM::Factory('stimulus', $this->request->param('id'));
    	
    	if ($this->channel && $stimulus->channel_id != $this->channel->id) {
    		$this->request->redirect("/stimulus");
    	}
    	
    	$stimulus->view_count++;
    	$stimulus->save();
    	
    	$this->set_stimulus_menu($stimulus);
    	$this->_view = new View("stimulus/view",
    	 		array("stimulus"=> $stimulus));
	}
	
	
	/**
	show the TOS page for a stimulus;
	*/
	public function action_tos() {
		$stimulus = ORM::Factory('stimulus', $this->request->param('id'));
    	$this->_auto_render  = false;
    	$this->response->body($stimulus->tos);
    }
	
	/**
		Create a submission for a Challenge
	*/
	public function action_participate() {
		$this->clear_sidebar();
		
    	$this->_enable_editor = true;
		$submission = null;
    	$errors = array();
    	
    	if(empty($_FILES) && empty($_POST) && isset($_SERVER['REQUEST_METHOD']) 
		 && strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
		 	$post_max = ini_get('post_max_size');
		 	$errors['content_file'] = "File Size exceeds maximum upload limit $post_max";
		}

    	$stimulus = ORM::Factory('stimulus', $this->request->param('id'));
    	$this->set_stimulus_menu($stimulus);
    	
    	$path = $stimulus->main_image;
    	if ($stimulus->content_id) {
    		$content  = ORM::factory('content',$stimulus->content_id);
    		$item = $content->get_generated_preset(Model_Content_Viewable::PRESET_THUMB_200_X);
    		if($item) {
    			$path = $item->file_path;
    		}
    	} 
    	
    	if (isset($_REQUEST['submission_id'])) {
    		$submission =  ORM::Factory('submission',
    			$_REQUEST['submission_id']);
    	} else {
    		$submission = new Model_Submission();
    		$submission->stimulus_id = $stimulus->id;
    		$submission->default_genre_id = $stimulus->genre_id;
    	}
    	
    	if (empty($submission->id) && isset($_POST['draft']) && !empty($stimulus->tos)) {
    		if (!isset($_POST['tos'])  ) {
    			$errors['tos'] = 'Please Agree to The Contest Terms of Service';
    		}
    	}
    	
    	if (empty($errors)) {
    		$errors = $submission->handle_submission_create_edit($this);
    	}
    	
    	
    	if ($submission->status == 'PUBLISHED') {
			$this->request->redirect("/submissions/view/".$submission->id);
		}
    	$this->add_to_sidebar(new View("common/image_block", 
    							array('img'=>$path)));
    	$this->_view = new View("submissions/create_edit");
        $this->_view->bind("rule",$stimulus);
        $this->_view->bind("submission",$submission);
        $this->_view->set("errors",$errors);
      	
	}
	
}
