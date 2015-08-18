<?php
defined('SYSPATH') or die('No direct script access.');
class Controller_Admin_Terms extends Controller_Admin_Abstract {    
     protected $_index_fields = array(
    'id',
    'term',
    'parent',
    'vocabulary'
    );
    protected $_orm_model = 'vocabulary_terms';
    
    protected $_secondary_menu =  	array(
    		 );
    
    public function action_index()
	{
		
		$ref =  $this->request->param('id');
		if (empty($ref)) {
			$ref = 'country';
		}
		
		
		$this->_secondary_menu['voc'] = new Model_Ui_Menuitem(
			"Vocabulary",
			"/admin/vocabulary");
		
		$this->_secondary_menu['city'] = new Model_Ui_Menuitem(
			"City",
			"/admin/terms/index/city");
			
		$this->_secondary_menu['state'] = new Model_Ui_Menuitem(
			"State",
			"/admin/terms/index/state");
    	$this->_secondary_menu['country'] = new Model_Ui_Menuitem(
			"Country",
			"/admin/terms/index/country");
		
		$this->_secondary_menu[$ref]->active = true;
		
		$model = new Model_Vocabulary_Terms();
		
		$elements = $model
		  ->with("vocabulary","LEFT")
		  ->where("vocabulary.name","=",$ref)
		  ->find_all();
		  
		return $this->render('index', array('elements' => $elements));
	}
}



