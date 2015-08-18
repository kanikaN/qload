<?php

defined('SYSPATH') or die('No direct script access.');
class Controller_Admin_Submissions extends Controller_Admin_Abstract {    
    protected $_index_fields = array(
    'id', 'title'
    );
    protected $_orm_model = 'submission';
}



