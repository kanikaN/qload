<?php
defined('SYSPATH') or die('No direct script access.');
class Controller_Admin_User extends  Controller_Admin_Abstract {
    
	/**
	Fields to be listed on the list
	*/
    protected $_index_fields = array( 'id',
    	  'email',  
    	  'username',
    	  'channel_id'
    	  );
    /*
    Route used for routing to the controller 
    */
    protected $_route_name  = "sections";
    
    /**
    Model Scafoolded Model_User
    */
    protected $_orm_model = 'user';
    
    /**
    Overriding the default Secondary Menu
    */
    protected $_secondary_menu =  	array();
    
    
    /**
    Activates a user by using appropriate model function
    */
    public function action_activate() {
    	$this->show_info_message("An Activation email will be sent to user");
        $user = ORM::factory('user',@$_GET['id']);
		if ($user->loaded() && $user->status != 'ACTIVATED') {
			// Create a mailer class with your Amazon ID/Secret in the constructor
			$user->activate_email();
			$this->show_info_message("Activation  Email is sent to  {$user->email}");
		} 
		$this->action_index();
    }
    
    
    /**
    Showing users on various status
    */
    public function action_index()
	{	
		$ref =  $this->request->param('id');
		if (empty($ref)) {
			$ref = 'APPLIED';
		}
		
		$this->_secondary_menu['APPLIED'] = 
		new Model_Ui_Menuitem("Applied","/admin/user/index/APPLIED" );
		$this->_secondary_menu['ACTIVATED'] = 
		new Model_Ui_Menuitem("Activated","/admin/user/index/ACTIVATED" );
		$this->_secondary_menu['BLOCKED'] = 
		new Model_Ui_Menuitem("Blocked","/admin/user/index/BLOCKED" );
		
		$this->_secondary_menu[$ref]->active = true;
		if ($ref =='APPLIED') {
			$this->_actions =  array('activate'=>"Activate");
    	}
		$model = new Model_User();
		  $elements = $model
		  ->where("user.status","=",$ref)
		  ->find_all();
		  
		return $this->render('index', array('elements' => $elements));
	}
    
    
}
