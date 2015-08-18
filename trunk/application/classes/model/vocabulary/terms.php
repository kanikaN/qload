<?php
/**
Terms in a vocaublary and managing of their heirarchy
*/
class Model_Vocabulary_Terms  extends Model_Base {
    
    protected $_table_name = 'vocabulary_terms';
    
    protected $_belongs_to = 
    	array('vocabulary' =>
    		array('foreign_key' =>'vocabulary_id'),
    		'Parent' => 
    			array(
    				'model'=> 'vocabulary_terms',
    				'foreign_key' => 'parent'
    			)
    	);
    
    protected $_name_field = 'term'; 
    
    
    public function formo() {
        return array(
            'id' => array ('render' => false),
            'State' => array ('label' => 'term')
        );
   	 }
}

