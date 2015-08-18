<?php
/**
Model for handling content genre
*/
class Model_Genre extends Model_Base {
    
    protected $_table_name = 'genres';
    protected $_name_field = "genre_name";
  
    public function formo()
    {
        return array
        (
            'id' => array
            (
                'render' => false
            )           
        );
    }
}



//REMOVE - f4ef0a9e - to 191565971646 , 191565971646
