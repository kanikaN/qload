<?php
defined('SYSPATH') or die('No direct script access.');
class Controller_Admin_Vocabulary extends Controller_Admin_Abstract {    
     protected $_index_fields = array(
    'id', 'name'
    );
    protected $_orm_model = 'vocabulary';
}



