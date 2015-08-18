<?php 
/**
Model for halding various roles in the system
*/
class Model_Role extends Model_Base {
    
	protected $_name_field = 'role_name'; 
    public function formo()
    {
        return array (
            'id' => array (
                'render' => false
            ),
        );
    }
    
}
