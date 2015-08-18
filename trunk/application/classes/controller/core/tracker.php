<?php
/**
Class for tracking various activity on the site 
The tracking is done at a controller action level
*/
class Controller_Core_Tracker extends Controller_Core_Access {
	
	/**
	@var array The list of outputs generated on the system as a result of the
	users current action
	*/
	protected $_activity_result = array();
	
	/**
	Adds an activity to the list of activity results
	*/
	function add_activity_result($result) {
		$this->_activity_result[] = $result;
	}
	/**
	intiialize theactiviy result with the current action id
	*/
	function before()  {
		parent::before();
		$this->_activity_result[] = $this->request->param("id");
	}
	/**
	Add the activity results to the table;
	*/
	function after() {
		
		if (!empty($this->_activity_result)) {
			foreach($this->_activity_result as $result) {
				$activity = new Model_Activity();
				$activity->create_activity($result);
			}
		}
	}
	
  
}
