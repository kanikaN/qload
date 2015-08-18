<?php
defined('SYSPATH') or die('No direct script access.');
/**
Controller for handling the user actions 

1.Login
2.Password reset
3.Forgot Password
4.Register
5.edit -user profile
6.create  - new expressions not associated with stimulus
7.home - Show the signed out qyuki home page
8.List User Drafts
9.List user Entries
10.List user Trash


*/
class Controller_User extends Controller_Core_Filter {
	
	/**
	List of actions that are non gated
	*/
    protected $_non_auth_actions = array('login',
    	'register',
    	'set_password',
    	'forgot_password' ,
    	'init');
	/**
	@var boolean Overriding the base class variable to implment authentication
	*/
    protected $_auth_required = false;
	
    
    /**
    Implementing the Gating of functions based on the non signed in actions
    
    */
	public function before() {
       parent::before();
       
       if (in_array($this->request->action(), $this->_non_auth_actions) ) {
       	   if ($this->user != null) {
       	   	   $this->request->redirect(SIGNED_IN_HOME);
       	   }
       } else if ($this->user == null) {
       	   $this->request->redirect("/user/login");
       } else {
       
       $this->info_message = '<p style="background:#DDDDDD;padding:10px;">Here is where you can upload all your other creative work in any format - Audio, Video, Images or Text. This will be your online creative portfolio on Qyuki Earlybirds. 
       	Why wait, start showcasing your creative side, right here.
       	<br/><br/>
       	<span style="font-size:12px">Please note: If you\'d like to respond to any of the creative challenges, go to "Challenges", click on "View" to see the details and then click on the "Participate" button to submit your entry.</span></p>';
       }
    }
    
    public function after() {
    	$this->clear_sidebar();
        if ($this->user) {
			$this->add_to_sidebar(new View("user/profile",
				array("user"=>$this->user)) );  
			$this->set_menu();
		} else {
			$this->add_to_sidebar(new View("common/image_block"));
		}
		parent::after();
    }
    
    /**
    Sets the user menu 
    */
    public function set_menu(){
    	$this->_main_menu = array();
        
        $this->_main_menu['index'] = new Model_Ui_Menuitem(
        	 "View My Entries" ,
        	 "/user/");
        $this->_main_menu['create'] = new Model_Ui_Menuitem(
        	"Upload Content",
        	"/user/create");
        $this->_main_menu['drafts'] = new Model_Ui_Menuitem(
        	"My Drafts" ,
        	"/user/drafts");
        $this->_main_menu['trash'] = new Model_Ui_Menuitem(
        	"Trash" ,	
        	"/user/trash");
        $this->_main_menu['edit'] = new Model_Ui_Menuitem(
        	"Edit Profile" ,
        	"/user/edit");
        /*
         $this->_main_menu['my_files'] = new Model_Ui_Menuitem(
        	"My Files" ,
        	"/user/my_files");
        */
        
        $action = $this->request->action();
        $this->_main_menu[$action]->active = true;
	
    }
    
    /***
    Temporaty function for first time intiialization of DB - 
    TODO - remove when go live
    */
    
    public function action_init() {
        
        try {
        	$model = ORM::factory('user');
        	$model->values(array(
        	
				'username' => 'admin',
				'password' => '99693a548357e4b089837816c182a500',
				'first_name' => 'Giju',
				'last_name' => 'Eldhose',
				'city' => 'Bangalore',
				'state' => 'Karnataka',
				'dob' => '1983-03-15',
				'email' => 'giju@ceegees.in',
            ));
        	$model->save();
       } catch (ORM_Validation_Exception $e) {
			$errors = $e->errors('models');
	   }
    }
    /**
    Handles the login action - initializes the session verifying the credentials
    */
	
    public function action_login() {
    	$error = null;
        if (isset($_POST['submit']) ){
            if (Model_User::authenticate($_POST,$this)) {
                $this->request->redirect(SIGNED_IN_HOME);
            } else {
            	$error = "Oops! Email and Password do not match.";
            }
        }
        $this->add_to_header(new View("user/login" , 
        	array('error_message'=>$error)));
        $this->_view = new View("pages/home"); 
        $this->_enable_sidebar = false;
    }
    /**
    Handles logout 
    */
    public function action_logout() {
    	$this->session->destroy();
        $this->request->redirect(NON_SIGNED_IN_HOME);
    }
    /**
    Register a new user to the system , works on POST variables
    */
    public function action_register() {
        $errors = array();
        if (isset($_POST['submit'])) {
            $errors = Model_User::add_new_user($_POST,$this);
            if (empty($errors)) 
            {
            	$this->_enable_sidebar = false;
            	$this->_view = new View("pages/home");
            } else {
               $this->show_error_message("Oops! We have a bit of a problem somewhere! Check the red field/s below.");
            }
        } 
        if ($this->_view == null) {
        	$this->_view = new View("user/register" , array('errors'=> $errors));
        }
    }
    /**
    Render the signed out home page
    */
    
    public function action_home() {
        $this->_view = new View("pages/home");
    }
    
    /**
    Adding the action for handling forgot password
    */
    public function action_forgot_password() {
        
    	$res = array(
    		"error_message"=> null ,
			"info_message" => null,
			);
			
		if (isset($_POST['submit'])) {
        	$res = Model_User::reset_password();
        }
		
        $this->add_to_header(
        	new View("user/forgot_password",$res)
		);
		$this->_enable_sidebar = false;
        $this->_view = new View("pages/home");
    }
    
    /**
    show submissions with a particular status for the current user
    */
    protected function _show_submissions($status) {
    
    	$this->set_page_filter('id');
        $user = ORM::Factory('user', $this->user->id );
       
        // $this->add_to_sidebar(  new View("user/profile",array("user"=>$user)) );  
        $entries = ORM::factory("submission")
        ->where("owner_id","=",$this->user->id)
        ->and_where("status","=",$status)
        ->order_by('modified_at','DESC');
        
        $this->page_config['page_size'] = 5;
        
        $count_query = clone $entries;
        $count = $count_query->count_all();
        $this->page_config['num_results'] = $count;
        $this->page_config['total_pages'] = ceil($count/ $this->page_config['page_size'] ) ;
	    
        $entries = $entries
	    ->offset(($this->page -1) * $this->page_config['page_size'])
	    ->limit($this->page_config['page_size'])
	    ->order_by('modified_at','DESC')
	    ->find_all();
	    $this->_view =  new View("submissions/list",array(
        	"submission_list"=> $entries));
    	
    }
    /**
    show submissions that are published by the user
    */
    public function action_index() {
    	
	    $this->page_config['base_url'] = "/user/index/";
    	$this->_show_submissions(Model_Submission::STATUS_PUBLISHED);
    }
     
    /**
    show submissions that are in the users draft folder
    */
    public function action_drafts() {
    	
	    $this->page_config['base_url'] = "/user/drafts/";
    	$this->_show_submissions(Model_Submission::STATUS_DRAFT);
    }
    /**
    show submissions that are in the users trash
    */
    public function action_trash() {
        $this->page_config['base_url'] = "/user/trash/";
    	$this->_show_submissions(Model_Submission::STATUS_TRASH);
    }
    /**
    Handles creation of non Stimulus submissions on user profile
    Identifies the genre from the associated table and show and show them
    in the sidebar menu
    */
    public function action_create() {
    	$this->_enable_editor = true;
    	$id = $this->request->param('id');
    	
    	
    	$item_map = array(
    	'Story Writing' => 'Story',
    	'Film' => 'Film',
    	'Music' => 'Music',
    	'Photography' => 'Photos'
    	);
    	
    	$submission = null;
    	$errors = array();
    	
    	if (isset($_REQUEST['submission_id'])) {
    		$submission =  ORM::Factory('submission',
    			$_REQUEST['submission_id'] );
    		if ($submission->status == Model_Submission::STATUS_PUBLISHED) {
    			$this->request->redirect("/user");
    		}
    		
    	} else {
    		$submission = new Model_Submission();
    		$submission->owner_id = $this->user->id;
    		if (!$id ) {
    			$id = "Story Writing";
    		}
    	}
    	
    	$genre_list = ORM::factory("genre")
    	->order_by('genre_name' , 'DESC')
    	->find_all();
    	
    	$rule = null;
    	
    	foreach($genre_list as $item) {
    		$menu = new Model_Ui_Menuitem($item_map[$item->genre_name],
    		 "/".$this->request->controller()."/create/".$item->genre_name
    		  );
    		$menu->id = $item->id;
    		
    		if ($submission->default_genre_id == $item->id) {
    			$menu->active = true;
    			$rule = $item;
    		} else 	if ($id == $item->name) {
    			$menu->active = true;
    			$rule = $item;
    			
    		}
    		$this->_secondary_menu[] = $menu;
    	}
    	
    	if (!$submission->default_genre_id && $rule) {
    		$submission->default_genre_id = $rule->id;
    	}
    	
    	$errors = $submission->handle_submission_create_edit($this);
    	$this->_view = new View("submissions/create_edit");
        $this->_view->bind("rule",$rule);
        $this->_view->bind("submission",$submission);
        $this->_view->set("errors",$errors);
    }
    
    /**
    	Handles the password reset workflow .Checks whether the id and token 
    	match , if the id and reset token match then we authenticate the user
    	and he can then change the password	
    */
    public function action_set_password() {
    
    	$user =  ORM::factory('user',@$_GET['id']);
    	$token =  @$_GET['token'];
    	if ($user->loaded() && $token == $user->reset_token) {
    		$this->load_user_channel($user);
    		if( $this->current_domain != $this->user_domain) {
    			$url = "http://".$this->user_domain
    				."/user/set_password?id=".$_GET['id']
    				."&token=".$_GET['token'];
    			$this->request->redirect($url);
    		} 
    		Session::instance()->set("user_id",$user->id);
    		Session::instance()->set("should_reset_password",true);
    		$this->show_error_message('Please Set a New Password');
    		$this->_view =  new View("user/edit",array("user"=>$user));
    		
    	} else {
    		$this->show_error_message('Invalid password reset token');
    		$this->_view = new View('pages/home');
    	}
    }
    
    /**
    Allows to edit the user profile
    */
    public function action_edit() {
    	$errors = array();
    	if (isset($_POST['submit'])) {
    	   $e2 =  $this->user->edit($_POST);
           $errors  = array_merge($errors,$e2);
           if (empty($errors)) {
           	   $this->show_info_message("The required changes are made");
           } else {
           	   $this->show_error_message("Oops! We have a bit of a problem somewhere! Check the red field/s below.");
           }
        }
    	$this->_view =  new View("user/edit",
    		array("user"=>$this->user ,
    		"errors"=> $errors)); 
    }
    
    public function action_my_files() {
    	
    	
    	$this->set_page_filter('id');
    	 $this->page_config['base_url'] = "/user/my_files/";
    	
    	$images = ORM::factory("content")
    	->where("type","=", "image")
    	->and_where("owner_id","=",$this->user->id);
    	
    	 
    	$this->page_config['page_size'] = 20;
        $count_query = clone $images;
        $count = $count_query->count_all();
        $this->page_config['num_results'] = $count;
        $this->page_config['total_pages'] = ceil($count/ $this->page_config['page_size'] ) ;
	   
    	$images = $images
	    ->offset(($this->page -1) * $this->page_config['page_size'])
	    ->limit($this->page_config['page_size'])
	    ->order_by('modified_at','DESC')
	    ->find_all();
	    $this->_view = new View("/user/list_files",array("images" =>$images));
    	
    }
}
