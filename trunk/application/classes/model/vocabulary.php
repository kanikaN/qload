<?php 
/**
Handling class of terms in the system
*/
class Model_Vocabulary extends Model_Base {
    
    protected $_table_name = 'vocabulary';
    
    protected $_name_field = 'name';
    public function formo() {
        return array (
            'id' => array (
                'render' => false
            ),
            
        );
    }
    
}
