<?php
defined('SYSPATH') or die('No direct script access.');
/**
Pages controller for showing various pages [tos , privacy policy etc]
on the system - we are linking this class with the database table for 
showing pages which provides a rich text editor for storing the page 
data and overriding the file data with the value in the database 

*/
class Controller_V extends Controller {
	public function action_profile_picture() {
    	$id = $this->request->param('id');
    	$param = $this->request->param('param1');
    	
    	$context_user = new Model_User($id);
    	if ( $id == null 
    		|| !$context_user->loaded() 
    		|| empty($context_user->profile_pic_id) ) {
    		$this->request->redirect("/assets/default/img/default-user.jpg");
    	}
    	$this->show_picture($context_user->profile_pic_id,$param);
    	
    }
    
    protected function show_picture( $image_id, $param) {
    	
    	$image = new Model_Content_Image($image_id);
    	
    	$preset_type = Model_Content_Image::PRESET_SQARE_50_50;
    	
    	if ($param == 'width_200') {
    		$preset_type = Model_Content_Image::PRESET_THUMB_200_X;
    	} else if ($param == 'width_800') {
    		$preset_type = Model_Content_Image::PRESET_LARGE_800_X;
    	} else if ($param == 'height_150') {
    		$preset_type = Model_Content_Image::PRESET_THUMB_X_150;
    	}
    	$content = $image->get_generated_preset($preset_type);
    	if ($content == null) {
    		$image->generate_preset($preset_type);
    		$content = $image->get_generated_preset($preset_type);
    	}
    	$this->request->redirect($content->file_path);
    	
    }
    public function action_picture() {
    	
    	$this->show_picture($this->request->param('id'), 
    		$this->request->param('param1'));
    
    }
    
    public function action_all_images() {
    	$result = ORM::factory('content_image')
    	->where('type','=','image')
    	->and_where('owner_id',"NOT IN", array(1000000000000000000,1000000000000000006 ,1000000000000000041 ,1000000000000000012) )
    	->find_all();
    	$content = '';
    	foreach($result as $item) {
    		$content .= '<img src="/v/picture/'.$item->id.'/sqare" /><br/>'; 
    	}
    	$view = new View("templates/plain");
    	$view->content = $content;
    	$this->response->body($view);
    }
    
}
