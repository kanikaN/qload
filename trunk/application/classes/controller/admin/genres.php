<?php
defined('SYSPATH') or die('No direct script access.');
/**
Class for genre management 
*/
class Controller_Admin_Genres extends Controller_Admin_Abstract {    
	/**
	Fields on list view
	*/
    protected $_index_fields = array(
    'id','genre_name'
    );
    /**
    ORM Model Scaffolded
    */
    protected $_orm_model = 'genre';
}



