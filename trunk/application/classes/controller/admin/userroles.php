<?php
defined('SYSPATH') or die('No direct script access.');
class Controller_Admin_UserRoles extends  Controller_Admin_Abstract {
    
    protected $_index_fields = 
    array( 'id');
    
    protected $_route_name  = "sections";
    protected $_orm_model = 'roleuser';
    public function formo() {
        return array (
            'id' => array ('render' => false ),
            'State' => array ('label' => 'term')
        );
    }
    
    
    public function action_index()
	{
		$this->secondary_menu = array();
		$this->secondary_menu['roles'] = new Model_Ui_Menuitem(
			"Roles",
			"/admin/roles"
		);
		$this->secondary_menu['userroles'] = new Model_Ui_Menuitem(
			"User Roles",
			"/admin/userroles"
		);
		$this->secondary_menu['userroles']->active =  true;
		
		parent::action_index();
	}
    
}
