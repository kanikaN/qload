<?php
defined('SYSPATH') or die('No direct script access.');
class Controller_Admin_Roles extends  Controller_Admin_Abstract {
    
	/**
	Fields listed in the role list view
	*/
    protected $_index_fields = array( 'id','role_name');
    
    /**
    Route which routes to the controller
    */
    protected $_route_name  = "sections";
    
    /**
    ORM Model Scaffolded
    */
    protected $_orm_model = 'role';
    
    
    /**
    Formo callback
    */
    public function formo() {
        return array (
            'id' => array ('render' => false ),
        );
    }
    
    /**
    	Role Management Submenu Configuration
    */
    public function action_index() {
		$this->_secondary_menu = array();
		$this->_secondary_menu['roles'] = new Model_Ui_Menuitem(
			"Roles",
			"/admin/roles"
		);
		$this->_secondary_menu['userroles'] = new Model_Ui_Menuitem(
			"User Roles",
			"/admin/userroles"
		);
		$this->_main_menu['userroles']->active = true;
		$this->_secondary_menu['roles']->active = true;
		parent::action_index();
	}
    
}
