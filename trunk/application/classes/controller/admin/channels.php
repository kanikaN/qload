<?php
defined('SYSPATH') or die('No direct script access.');
class Controller_Admin_Channels extends Controller_Admin_Abstract { 
	/**
	Fields on list view
	*/
    protected $_index_fields = array(
    'id', 'name','code'
    );
    /**
    The model Scaffolded
    */
    protected $_orm_model = 'channel';
}
