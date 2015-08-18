<?php
defined('SYSPATH') or die('No direct script access.');
/**
Class for Stimulus management
*/
class Controller_Admin_Stimulus extends Controller_Admin_Abstract {  
	
    protected $_index_fields = array(
    'id', 'title'
    );
    /**
    ORM Model Scaffolded
    */
    protected $_orm_model = 'stimulus';
}



