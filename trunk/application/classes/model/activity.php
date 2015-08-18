<?php

/**

Model for tracking the user activities on the Qyuki.
The model captures the meta information which can be later propogated 
to independent streams using a NOSQL solutiion
*/
class Model_Activity extends Model_Base {
	/**
	overriding the table name
	*/
    protected $_table_name = 'activity';  
    
    /**
    Creates and activity with the id of the newly 
    created object in the system .
    **/
    public function create_activity($result) {
    	$this->result = $result;
    	$this->controller = Request::current()->controller();
    	$this->action = Request::current()->action();
    	$this->created_at = time();
    	$this->owner_id = Session::instance()->get('user_id');
    	$this->save();
    }
}
