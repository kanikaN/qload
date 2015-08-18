<?php
defined('SYSPATH') or die('No direct script access.');

/**
Class for managing the template and view creation . Class works as a decorator 
for configuring the various UI elements + functionalities needed +
providing various kinds of filtered output on a given resultset. serves as base class for most of 
the views that needs and html rendering
*/

class Controller_Core_Filter extends Controller_Core_Template {
	
	
	/**
	@var string the type of filter being applied
	*/
	var $filter_value = 'all';
	/**
	@var string The type of filter that is being applied
	*/
	var $filter_type = null;
	/**
	@var int page index
	*/
	var $page  = 1;
	
	/**
	@var View View object that will be overriden
	*/
	protected $_view = null;
	/**
	@var array style objects to be loaded on requirement basis to reduce 
	overload
	*/
	protected $_styles = array();
	
	/**
	@var array Array of Views for loading in the sidebar
	*/
	protected $_sidebar_blocks = array();
	/**
	@var array List of views to be shown in the header
	*/
	protected $_header_blocks = array();
	
	/**
	@var array Left main menu implementation 
	*/
	protected $_main_menu = null;
	/**
	@var array Leftside secondary menu
	*/
	protected $_secondary_menu = null;
	
	/**
	@var string Template File to be used for rendering
	*/
	protected $_template_file = "templates/base";	
	
	/**
	@var string The default image shown on sidebar
	*/
	protected $_default_sidebar_image = '/assets/default/img/bird_circle.png';
	
	/**
	@var boolean Enable javascript based scrollbar 
	*/
	protected $_enable_js_scrollbar = false;
	/**
	@var boolean Enable the html5 + Flash player on the page
	*/
	protected $_enable_player = false;
	/**
	@var boolean Enable Rich text editor on the page
	*/
	protected $_enable_editor = false;
	/**
	@var boolean Enable fancy box on the page
	*/
	protected $_enable_fancybox = true;
	/**
	@var boolean Enable the top navigation bar
	*/
	protected $_enable_top_navigation;
	
	/**
	@var boolean Enable Sidebar
	*/
	
	protected $_enable_sidebar = true;
	
	/**
	@var array The current paging configuration
	*/
	protected $page_config = array(
		'current_page' => 1,
		'total_pages' => 1,
		'num_results' => 100,
		'page_size' => 5,
		'base_url'=>'/');
	
	
	var $error_message = '';
	var $info_message = '';
	
	/**
	Sets the session message to be shown on page redirects
	*/
	public function set_session_message($msg) {
		$this->session->set('session_message',$msg);
	}
	

	/**
	Sets the filtes to be shown at various Levels
	*/
	function set_filters() {
		$this->_main_menu = array();
    	$this->_main_menu['all']  =
    	new Model_Ui_Menuitem('All',"/".$this->request->controller()."/");
    	
    	$query = DB::select("genres.*")
    	->distinct(TRUE)
    	->from('genres')
    	->join('stimulus')
    	->on('genres.id','=','stimulus.genre_id');
    	if ($this->channel) {
        	$query->where("stimulus.channel_id","=" , $this->channel->id);
        }
        
        $genre_list = $query->as_object()->execute();
        $count = 0;
    	
        foreach($genre_list as $item) {
    		$path =  "/".$this->request->controller()."/index/genre_".$item->genre_name;
    		 /*'id' => $item->id,
    		 "name" => $item->genre_name);
    		 */
    		$this->_main_menu[$item->genre_name] = 
    			new Model_Ui_Menuitem($item->genre_name,$path);
    		$this->_main_menu[$item->genre_name]->id = $item->id;
    	}
    	
    	$val = $this->request->param('id');
    	
    	if(strpos($val, 'stimulus_') === 0) {
    		$this->filter_type = 'stimulus';
    		$this->filter_value = str_replace('stimulus_','',$val);
    	} else if (strpos($val,'genre_') === 0 ) {
    	    $this->filter_type = 'genre';
    	    $this->filter_value = str_replace('genre_','',$val);
    		$this->_main_menu[$this->filter_value ]->active = true; 
    	} else {
    		$val  = 'all';
    		$this->_main_menu['all']->active = true;
    	}
    	$this->set_page_filter('param1');
    	
    }
    
    
    /**
    Sets the page hadling filter
    */
     
    function set_page_filter($param) {
    	//echo $param;
    	$param =   	$this->request->param($param);
    	if (strpos($param, 'page_') === 0) {
    		$this->page = str_replace('page_','',$param);
    		$this->page_config['current_page'] = $this->page;
    		
    	}
      
     }
     
     
    /**
    Handles the session message if it was set
    */
    function before() {
		parent::before();
		$this->info_message  = $this->session->get('session_message');
		
		if ($this->session->get("should_reset_password") ) {
       	   $this->info_message = "<a href=\"/user/edit\"> You should reset your password<a/>";
        }
		$this->session->set('session_message',null);
		
        $this->add_to_sidebar(new View("common/image_block", 
    			array('img'=> $this->_default_sidebar_image)));
	}
	
	/**
	Decorates the template to show the output view
	*/
	function after() {
		
		if ($this->_auto_render) {
			
			$this->_template->styles = $this->_styles;
			$this->_template->sidebar_present = $this->_enable_sidebar;
			$this->_template->content = '';
			$this->_template->sidebar = '';
			$this->_template->page_title = $this->_page_title;
			$this->_template->top_nav = '';
			$this->_template->header = '';
			$this->_template->enable_fancybox = $this->_enable_fancybox;
			$this->_template->enable_player = $this->_enable_player;
			$this->_template->enable_editor = $this->_enable_editor;
			$this->_template->enable_js_scrollbar = $this->_enable_js_scrollbar;
			$this->_template->pagination_config = $this->page_config;
			
			$this->_template->error_message = $this->error_message;
			$this->_template->info_message = $this->info_message;
        
        	if ($this->user != null && $this->request->directory() == '') {
        		$this->_template->top_nav =
				new View("common/top_navigation", 
					array("controller" => $this->request->controller()));
				$this->add_to_header(new View("common/header_top_navigation"));
			} 
        
			$this->add_to_sidebar(new View('common/left_navigation' ,
        							   array("menu" => $this->_main_menu,
        							   		 'sub_menu'=>$this->_secondary_menu)));
			if ($this->_view != null) {
				$this->_template->content = $this->_view;
			}
			foreach ($this->_sidebar_blocks as $block) {
				$this->_template->sidebar .= $block->render();
			}
			foreach ($this->_header_blocks as $block) {
				$this->_template->header .= $block->render();
			}
			
		}
		parent::after();
	}
	/**
	Adds the list of custom styles to be rendered
	@param string the path to the style file
	*/
	function add_style($style) {
	    $this->_styles[] = $style; 
	}
	
	/**
	Sets the error message to be sent to shown on view
	@param string the error message
	*/
	
	public function show_error_message($msg) {
	    $this->error_message = $msg;
	}
	
	
	/**
	Sets the info message to be sent to shown on view
	@param string message to be shown as info
	*/
	
	public function show_info_message($msg) {
	    $this->info_message = $msg;
	}
	
	/**
	Adds a sub view to sidebar
	@param View View object to shown on the header
	*/
	
	public function add_to_sidebar($block) {
	    $this->_sidebar_blocks[] = $block;
	}
	
	/**
	Clear the sidebar for adding blocks afresh
	*/
	public function	 clear_sidebar() {
	    $this->_sidebar_blocks = array();
	}
	
	/**
	Adds a sub view to header
	@param View - a View object to shown on the header
	*/
	public function add_to_header($block) {
		$this->_header_blocks[] = $block;
	}
     
}


