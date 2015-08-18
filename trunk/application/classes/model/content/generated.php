<?php

/**
Class for handlign the generated content in the system . 
the generated content includes content thats generated for 
1.Optimizing performance at data transfer level based on the views that 
are getting rendeded (eg: thumbnails , images based on page size requirements
2.Handling transcoding requirements of various file types

**/
class Model_Content_Generated extends Model_Base implements Model_Content_ICDN {
    
    protected $_table_name = 'generated_contents';
    protected $_name_field = 'file_path'; 
    protected $_belongs_to = array (
    	'parent' => array ('model' => 'content',
    		'foreign_key' => 'parent_id' )
    );

	var $cdn_prefix = '';
	
	public function get_cdn_path() {
		return $this->cdn_prefix.$this->path;
	}
    
}
