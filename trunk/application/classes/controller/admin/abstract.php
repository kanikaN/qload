<?php
defined('SYSPATH') or die('No direct script access.');
/**
Abstract Class for handlibng the admin module 
This Class acts as the gate keeper as well for admin actions. 
*/
class Controller_Admin_Abstract extends Controller_Core_Filter {
    
	/*
	 * @var $_route_name Route to be used for actions (default: crud)
	 */
    protected $_route_name  = "sections";
    protected $_actions = array();
    protected $_secondary_menu;
    protected $_enable_editor = true;
    
    /*
	 * @var $_index_fields ORM fields shown in index
	 */	 
	protected $_index_fields = array(
		'id'
	);

	/*
	 * @var $_orm_model ORM model name
	 */
	protected $_orm_model = '';
	protected $_default_sidebar_image = '/assets/admin/img/security.png';
	 /*
	 * CRUD controller: READ
	 *
	 */
	 public function before() {
        parent::before();
	 	
        $this->add_style("/assets/admin/css/style.css");
	 	 
	 	$query = DB::select()
    	->from('roles')
    	->join('user_roles',"LEFT")
    	->on('user_roles.role_id','=','roles.id')
    	->join('users',"LEFT")
    	->on('user_roles.user_id','=','users.id')
    	->where('users.id','=',$this->user->id)
    	->and_where('roles.role_name','=','admin');
    	
    	$res = 	$query->as_object()->execute();
    	if ($res->count() <= 0 ) {
    		$this->request->redirect("/");
    	}
    	
	 	$this->_main_menu = array(
		'stimulus'=> new Model_Ui_Menuitem("Stimulus","/admin/stimulus/index" ),
		'genres'=> new Model_Ui_Menuitem("Genres","/admin/genres/index" ),
		'user'=>  new Model_Ui_Menuitem("Users" , "/admin/user/index"),
		'channels'=> new Model_Ui_Menuitem("Channels", "/admin/channels/index" ),
		'terms' => new Model_Ui_Menuitem("Terms" ,"/admin/terms/index" ),
		'userroles' => new Model_Ui_Menuitem("Role Management" , "/admin/userroles/index" ),
		'pages' => new Model_Ui_Menuitem("General Pages" , "/admin/pages/index" ),
		);
		
		if (isset($this->_main_menu[$this->request->controller()])) {
			$this->_main_menu[$this->request->controller()]->active = true;
		}
        
    }
    
    /**
    CURD controller List 
    */
	 
	public function action_index()
	{
		$elements = ORM::Factory($this->_orm_model)
		               ->find_all();

		return $this->render('index', array('elements' => $elements));
	}
	
	/*
	 * CURD controller: CREATE
	 */
	public function action_create()
	{
		$element = ORM::Factory($this->_orm_model);
		
		$form = Formo::form()->orm('load',$element);
		$form->add('save', 'submit', 'Create');
		
		if($form->load($_POST)->validate()) {
			if($this->_create_passed($form, $element)) {
				$element->save();
				$form->orm('save_rel', $element);

				$this->request->redirect(Route::get($this->_route_name)->uri(array('controller'=> Request::current()->controller())));
			}
		} else	{
			$this->_create_failed($form, $element);
		}
		
		return $this->render('create', array('form' => $form));
	}
	
	/*
	 * CRUD controller: UPDATE
	 */
	public function action_update() {
		$element = ORM::Factory($this->_orm_model, $_GET['id']);
		
		$form = Formo::form()->orm('load',$element);
		
		$form->add('update', 'submit', 'Save');
		
		if($form->load($_POST)->validate()) {
			if($this->_update_passed($form, $element))  {
				$element->save();
				$form->orm('save_rel', $element);

				$this->request->redirect(Route::get($this->_route_name)->uri(array('controller'=> Request::current()->controller())));
			}
		} else {
			$this->_update_failed($form, $element);
		}

		return $this->render('update', array('form' => $form));
	}
	/*
	 * CRUD controller: DELETE
	 */
	public function action_delete() {
		$element = ORM::Factory($this->_orm_model, $_GET['id']);

		if($_POST) {
			if($_POST['id'] == $element->id) {
				$element->delete();
				$this->request->redirect(Route::get($this->_route_name)->uri(array('controller'=> Request::current()->controller())));
			}
		}

		return $this->render('delete', array('element' => $element));
	}

	/*
	 * Hooks - they will be here until Formo incorporates callbacks into stable version
	 */

	/*
	 * This method is a hook for form validation in Create action.
	 * It fires when form validation has passed.
	 *
	 * @param Formo_Form $form Formo_Form object
	 * @return mixed
	 */
	protected function _create_passed(Formo_Form $form, ORM $element)
	{
		// You will probably want to extend this method
		return true;
	}

	/*
	 * This method is a hook for form validation in Create action.
	 * It fires when form validation has failed.
	 *
	 * @param Formo_Form $form Formo_Form object
	 * @return mixed
	 */
	protected function _create_failed(Formo_Form $form, ORM $element)
	{
		// You will probably want to extend this method
		return true;
	}

	/*
	 * This method is a hook for form validation in Update action.
	 * It fires when form validation has passed.
	 *
	 * @param Formo_Form $form Formo_Form object
	 * @return mixed
	 */
	protected function _update_passed(Formo_Form $form, ORM $element)
	{
		// You will probably want to extend this method
		return true;
	}

	/*
	 * This method is a hook for form validation in Update action.
	 * It fires when form validation has failed.
	 *
	 * @param Formo_Form $form Formo_Form object
	 * @return mixed
	 */
	protected function _update_failed(Formo_Form $form, ORM $element)
	{
		// You will probably want to extend this method
		return true;
	}

	/*
	 * This method is a wrapper for templating system.
	 *
	 * This allows use of eiter View, Haml, Mustache or any other templating
	 * system you'd like to use.
	 * It defaults to the basic View though.
	 *
	 * @param string $view View name
	 * @param mixed $data View data
	 * @return View
	 */
	protected function render($view = null, $data = null)
	{
		$r = Request::current();
		$custom = ($r->directory() ? $r->directory().'/' : '') . $r->controller() . '/' . $r->action();
		$default = 'admin/curd/'.$view;
		$data = array('fields' => $this->_index_fields,
		              'name' => $this->_orm_model,
		              'actions'=> $this->_actions,
		              'route' => $this->_route_name) + $data;
		

		try
		{
			$view = new View($custom, $data);
		}
		catch(Kohana_View_Exception $e)
		{
			$view = new View($default, $data);
		}
		$view = new View($default, $data);

		$this->_view = $view;
	}
    
    

}
