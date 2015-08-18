<?php
/**
Model for hanling the text content in the system , 
we are storing the text content in the database as a Text field

*/
class Model_Content_Text extends Model_Content_Abstract {
    
    public function set_content($text) {
    	$this->add_content_caption(substr(strip_tags($text),0,40));
    	$this->type ="text";
    	$this->mime_type ="text/plain";
    	$this->text_content = $text;
    	$this->save();
    	return $this;
    } 
}

