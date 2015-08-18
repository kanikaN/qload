<?php
defined('SYSPATH') or die('No direct script access.');
/**
Class for handling the GateKeeping

*/


class Controller_Core_Access extends Controller {
	
	/**
	parameter to be overriden by derived classes if they
	dont want authorization for accessing their actions. OR
	Providing custom accessing rules
	*/
	protected $_auth_required = true;
	
	/**
	* @var Model_User the currently logged in user
	*/
	public $user = null;
	
	/**
	@var Session Session Reference
	*/
	public $session = null;
	
	/**
	@var Model_Chanel Channel instance based on domain
	*/
	public $channel = null;
	
	/**
	@var Model_Channel Channel based on user registration
	*/
	public $user_channel = null;
	
	/**
	@var string user domain based on registration
	*/
	public $user_domain = '';
	/**
	@var string the domain of the application
	*/
	public $main_domain = '';
	
	/**
	@var string channel domain 
	*/
	public $channel_domain = '';
	/**
	@var string The curent domain
	*/
	public $current_domain = '';
	
	/**
	Loads the channel for the curent user , sets up the domain
	if no channel is present for the user then users domain is the main domain
	
	@param Model_User $user The User object that is loaded
	
	*/
	protected function load_user_channel($user) {
		$this->user_channel = null;
		
		 
        if( !empty($user->channel_id) ) {
        	$this->user_channel =  ORM::factory('channel',$user->channel_id);
        	$this->user_domain = $this->user_channel->code.".".$this->main_domain;
        } else {
        	$this->user_domain = $this->main_domain;
        }
	}
	/**
	Loads the domain for the a channel,  looks at the subdmain and loads
	corresponding channel 
	*/
	protected function load_domain_channel() {
	
		$splits = explode(".",@$_SERVER['SERVER_NAME']);
        $this->current_domain = @$_SERVER['SERVER_NAME'];
		if (count($splits) > 3) {
			/* 
			if the current url is a channel subdomain , get the channel id 
			*/
			$this->main_domain = $splits[1].".".$splits[2].".".$splits[3];
			$this->channel = ORM::factory('channel')
			->where("code","=",$splits[0])
			->find();
			//If there is no such channel redirect to main domain.
		
			if (!$this->channel->loaded()) {
				$this->request->redirect("http://{$this->main_domain}");
			}
			
		} else {
			$this->main_domain = $splits[0].".".$splits[1].".".$splits[2];
		}
		
	}
	/**
	Initalizing the session , checking whether an active user
	infomation is in the session. IF the controller actions 
	requires being authenticated. we check whether a user is authenticated
	*/
	public function before() {
		
		$this->session = Session::instance();
        $user_id = $this->session->get('user_id');
		
        if (!empty($user_id) ) {
            $this->user = ORM::factory('user',$user_id);
            View::bind_global('user', $this->user);
            
		} else if ($this->_auth_required) {
			$this->request->redirect(NON_SIGNED_IN_HOME);
		}
	    
		$this->load_domain_channel();
		$this->load_user_channel($this->user);
		
		if ($this->user_channel == null){
			/* 
			user who doesnt have a channel can access anything 
			*/
			return;
		} else { 
			/* 
			User trying to access direct domain is not allowed
			User trying to access another sub domain is not allowed
			*/
			$user_domain_url = "http://".$this->user_domain;
			
			if($this->channel == null) {
				/* User trying to access base domain 
				redirect him to his domain
				*/
				$this->request->redirect($user_domain_url);
				
			} else if ($this->channel->id  != $this->user_channel->id){
				/* User trying to access some other domain 
				redirect him to his domain
				*/
				$this->request->redirect($user_domain_url);
			} else {
				// doing the correct access leave that poor chap alone.
			}
		} 
	}
}

