<?php
/**
Model for handling the various stimulus in the system
*/

class Model_Stimulus extends Model_Base {
    
    protected $_table_name = 'stimulus';
   
    protected $_belongs_to = array('channel' => 
                               array('foreign_key' => 'channel_id'),
                               	   'genre' => 
                               array('foreign_key' => 'genre_id')
                               );
    protected $_name_field = 'title'; 
    /**
    formo callback needed for the admin interface
    */
    public function formo()
    {
        return array
        (
            'id' => array
            (
                'render' => false
            ),
            'summary' => array (
             'driver' => 'textarea'
             
             )
            ,
            'rule_text' => array (
             'driver' => 'textarea',
             'attr' => array('class' => 'tinymce')
             ),
            'tos' => array (
             'driver' => 'textarea',
             'attr' => array('class' => 'tinymce')
             ),
            
             'prize_details' => array (
             'driver' => 'textarea',
              'attr' => array('class' => 'tinymce')
             )
        );
    }
}

