<?php 
/**
Model hanlding the user role association will be required on the 
moderation + Admin workflow
*/
class Model_RoleUser extends Model_Base {
    
    protected $_table_name = 'user_roles';
    protected $_belongs_to = array('user' => 
                               array('foreign_key' => 'user_id'),
                               	   'role' => 
                               array('foreign_key' => 'role_id')
                               );
    /**
    formo callback
    */
    public function formo()
    {
        return array
        (
            'id' => array
            (
                'render' => false
            ),
            
        );
    }
    
}
