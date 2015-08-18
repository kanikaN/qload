<?php
/**
Model for halding various general purpose pages in the sustem which needs
to be auto edited from admin
*/
class Model_Page extends Model_Base {
    
    protected $_table_name = 'pages';
    protected $_name_field = 'id'; 
  
    public function formo()
    {
        return array
        (
            
            'page_text' => array (
             'driver' => 'textarea',
             'attr' => array('class' => 'tinymce')
             )
            
        );
    }
}

