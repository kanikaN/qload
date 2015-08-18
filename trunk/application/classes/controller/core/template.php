<?php
defined('SYSPATH') or die('No direct script access.');

/**

Base class for the pages which loads a template for 
*/
   
class Controller_Core_Template extends Controller_Core_Tracker {
	
	/**
	 * @var  View  page template
	 */
	protected $_template = 'template';
	
	/**
	@var string Template File
	*/
	protected $_template_file = "templates/base";

	/**
	 * @var  boolean  auto render template
	 **/
	protected $_auto_render = TRUE;
	
	/**
	@var string Page Title
	*/
	protected $_page_title = 'Qyuki';

	/**
	* Loads the template [View] object.
	*/
	 
   public function before() {
		parent::before();

		if ($this->_auto_render === TRUE)
		{
			// Load the template
			$this->_template = View::factory($this->_template_file);
		}
	}

	/**
	 * Assigns the template [View] as the request response.
	 */
	public function after() {
		if ($this->_auto_render === TRUE)
		{
			$this->response->body($this->_template->render());
		}

		parent::after();
	}

} // End Controller_Template
