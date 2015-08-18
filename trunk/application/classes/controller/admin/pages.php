<?php
defined('SYSPATH') or die('No direct script access.');
class Controller_Admin_Pages extends Controller_Admin_Abstract {    
    
	/**
	Fields in  list view
	*/
	protected $_index_fields = array( 'id');
     
     /**
     ORM Model Scaffolded
     */
     protected $_orm_model = 'page';
}



