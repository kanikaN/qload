<?php
defined('SYSPATH') or die('No direct script access.');
class Controller_Admin_Cron extends Controller {
    
    public function action_process_content() {
    	
    	
    }
    
    function action_aspect() {
    
    	$this->response->headers("Content-type","text/plain");
    	$input = array(
    		array("width"=> 640, "height"=> 480),
			array("width"=> 640, "height"=> 600),
			array("width"=> 640, "height"=> 320),
			array("width"=> 440, "height"=> 320),
			array("width"=> 320, "height"=> 240),
			array("width"=> 800, "height"=> 240),
			array("width"=> 1200, "height"=> 800),
			array("width"=> 1920, "height"=> 1080),
			array("width"=> 1080, "height"=> 1920),
			array("width"=> 480, "height"=> 640),
			array("width"=> 320, "height"=> 800),
    	);
    	
    	for($idx = 0; $idx < 30;$idx++) {
    		$input[] =  array('width'=> rand(100,1920) ,
    			'height' => rand(100,1920));
    	}
    	
    	
    	/*
    	
    	
    	aspect of current video = width / height 
    	
    	required aspect = req_width / req_height;
    	
    	if the ratios are same 
    	width /( width / height )
    	
    	*/
    	
    	$vids = ORM::factory('content_video')
    	->where('type','=','video')
    	->find_all();
    	
    	foreach($vids as $vid) {
    		
    		echo "\nLoading video {$vid->id}";
    		$preset = Model_Content_Video::PRESET_VIDEO_MP4_640_X;
			$res = $vid->get_preset($preset);
			$res->preset_processing_status =
				Model_Content::PROCESSING_PRESET_WAITING;
			$vid->generate_preset($preset);
			echo $vid->ffmpeg_service->output_str;
		//	break;
    	}
    	
    }
    
    
    
}
    
