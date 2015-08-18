<?php
defined('SYSPATH') or die('No direct script access.');
/**
Controller for handling various searches on users in the system
*/
class Controller_People extends Controller_Core_Filter {
    
	
	/**
	Lists the users based on various crieteria
	*/
    public function action_index() {
    	$this->set_page_filter('id');
    	$this->page_config['base_url'] = "/people/index/";
    	
    	$userList = DB::select()
    	->from('users')
    	->where('users.id','>',0)
    	->and_where('users.status','=',Model_User::STATUS_ACTIVATED);
    	
    	
    	if($this->channel) {
    		$userList->and_where("users.channel_id","=",$this->channel->id);
    	}
    	
    	$count_query = clone $userList;
    	$count = $count_query->select('COUNT("*") AS usercount')->execute()->get('usercount');
    	
    	$this->page_config['page_size'] = 10;
		$this->page_config['total_pages'] = ceil($count/ $this->page_config['page_size'] ) ;
		$userList->order_by('users.created_at','DESC')
		->limit($this->page_config['page_size'])
		->offset(($this->page-1) * $this->page_config['page_size']);
		
    	$userList = $userList->as_object()->execute();
        $this->_view = new View("user/list",array("userList"=> $userList));
    }
    
    /**
    Show a particular user profile 
    */
    public function action_profile() {
    
    	$id = $this->request->param('id');
    	if (!$id) {
    		$id = $this->user->id;
    	}
    	
    	$user = ORM::Factory('user', $id );
    	
    	$entries = ORM::factory("submission")
        ->where("owner_id","=",$user->id)
        ->and_where("status","=",Model_Submission::STATUS_PUBLISHED)
        ->find_all();
        
    	$this->clear_sidebar();
        $this->add_to_sidebar(  new View("user/profile",
        	array("user"=>$user)) );  
        
        
    	$this->_main_menu = array();
        $this->_main_menu['index'] = new Model_Ui_Menuitem(
        	 "Entries","/people/profile/$id");
        $this->_main_menu['index']->active = true;
        $this->_view =  new View("submissions/list",array(
        	"submission_list"=> $entries));
    	
    }
    
}
