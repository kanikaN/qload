<?php
defined('SYSPATH') or die('No direct script access.');

/**
Handling listing of submissions + Management Actoins
*/
class Controller_Submissions extends Controller_Core_Filter {
	
    public function action_create($title, $description) {
        $this->_view = new View("submissions/create");
    }
    /**
    Handles listing of various submissions based on various search crieteria
    handles pagination
    */
    public function action_index() {
    	$this->set_filters();
    	$list = array();
    	
    	$this->page_config['base_url'] = "/submissions/index/{$this->filter_type}_{$this->filter_value}/";
   
    	
        $list = ORM::Factory('submission');
        $list->join('users','LEFT')
        ->on('submission.owner_id',"=",'users.id');
        
        $stimulus_list  = ORM::factory('stimulus');
        $list->where("submission.status","=",Model_Submission::STATUS_PUBLISHED );
        
        
        
        if ($this->channel) {
        	$list->and_where('users.channel_id','=',$this->channel->id);
        	$stimulus_list->where("channel_id","=" , $this->channel->id);
        } else {
        	$stimulus_list->where("id",">" , 0);
        }
        
        if ($this->filter_type =='genre') {
			$stimulus_list->and_where('genre_id',"=",
			$this->_main_menu[$this->filter_value]->id);
			$list->and_where("default_genre_id","=",
				$this->_main_menu[$this->filter_value]->id);
	    }  
	    
        $stimulus_list = $stimulus_list->find_all();
        $selected_stimulus = '';
        
        if ($this->filter_type == 'stimulus' ) {
        	$list->where("stimulus_id","=", $this->filter_value);
        	
	    	$selected_stimulus =  $this->filter_value;		
	    	foreach($stimulus_list as $item) {
	    		if (strcmp($item->id,$selected_stimulus) == 0) {
	    			foreach($this->_main_menu as &$menu) {
	    				if ($menu->id == $item->genre_id) {
	    					$menu->active = true;
	    				}
	    			}
	    		}
	    	}
	    }
	   
	     $count_query = clone $list;
	     
	    $count = $count_query->count_all();
	    $this->page_config['page_size']  = 10;
	    $this->page_config['total_pages'] = ceil($count/ $this->page_config['page_size'] ) ;
        $list = $list->limit($this->page_config['page_size'])
	    ->offset(($this->page -1) * $this->page_config['page_size'])
	    ->order_by('modified_at','DESC')
	    ->find_all();
	    
        $this->_view = new View("submissions/list_view", 
        array("stimulus_list"=> $stimulus_list,
		  "submission_list" => $list ,
		  "selected_stimulus" => $selected_stimulus
		  ));
    }
    /**
    Action for rendering a single submission
    */
    public function action_view() {
    	$this->set_filters();
    	$id = $this->request->param('id');
    	$submission = ORM::factory('submission',$id);
    	
    	$submission->view_count++;
    	$submission->save();
    	
    	$this->_enable_player = true;
    	$this->_view = new View("submissions/view");
    	$this->_view->bind("submission", $submission);
    }
    
    /**
    Action for removing a submissoin from the system 
    after performing the action the user is redirected to the 
    trash folder to show the result
    */
    
    public function action_remove() {
    	$id = $this->request->param('id');
    	$submission = ORM::factory('submission',$id);
    	$submission->remove_submission($this);
    	$this->request->redirect('/user/trash?key='.time());
    }
    /**
    Preview a submission when the user is making it
    */
    
    public function action_preview() {
    	$id = $this->request->param('id');
    	$submission = ORM::factory('submission',$id);
    	$template = new View("templates/plain");
    	$template->content = new View("submissions/view");
    	$template->content->bind("submission", $submission);
    	$this->response->body($template);
    	$this->_auto_render = false;
    	
    }
  
}
