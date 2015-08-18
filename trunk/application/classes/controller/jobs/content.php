<?php
defined('SYSPATH') or die('No direct script access.');
/**
Class for handling jobs on Content
*/
class Controller_Jobs_Content extends Controller_Jobs_Abstract {
	
	/**
	@var boolean overriding the base class - for jobs to run from
	cron Or messaging queue no authorization is requesred
	*/
	protected $_auth_required = false;
	
	/**
	@var string output message of the job
	*/
	var $msg = '';
	
	/**
	@var array Object representation of the job response
	*/
	var $result = array();
	
	/**
	For a Content if the preset creation is in waiting stage
	*/
	const JOB_PRESET_CREATION_WAITING = 0;
	/**
	Completed the preset creation will update the status on db tables
	*/
	const JOB_PRESET_CREATION_DONE= 1;
	
	
	public function before() {
		parent::before();
		set_time_limit(60*3);
		ob_start();
		$this->result['status'] = true;
		$this->result['continue'] = true;
	}
	
	public function after() {
		
		$this->response->headers("Content-type","application/json");
		$this->msg .= ob_get_contents();
		ob_end_clean();
		if ($this->request->param("id") == 'debug') {
    		$this->result['debug'] = $this->msg;
		}
		echo json_encode($this->result);
		parent::after();
	}
	
	/*
	Creates Presets Associated with a particular content type the required 
	presets are inserted into the generated presets table which is later made 
	use by generate_preset action for generating the necessary presets by caling
	the generate preset function.
	*/
	public function action_create_preset() {
		
		$content = ORM::factory('content')
		->where('processing_status','=',self::JOB_PRESET_CREATION_WAITING)
		->order_by('id','ASC')
		->find();
		
		if (!$content->loaded()) {
			$this->result['continue'] = false;
			$this->msg .= "No more content to process";
			return;
		} 
		$this->msg .="\nProcessing {$content->id}- of Type {$content->type} - ";
		$content->load_generated_presets();
		$preset_map = array();
		switch($content->type) {
		case 'text' :
			break;
		case 'image':
			$preset_map = Model_Content_Image::$preset_config_map;
			break;
		case 'video':
			$preset_map = Model_Content_Video::$preset_config_map;
			break;
		case 'audio':
			$preset_map = Model_Content_Audio::$preset_config_map;
			break;
		}
		foreach($preset_map as $key => $value) {
			if (!$content->is_preset_created($key)) {
				$this->msg .= "\nAdded $key";
				$generated = new Model_Content_Generated();
				$generated->parent_id = $content->id;
				$generated->preset_type = $key;
				$generated->preset_processing_status = 0;
    			$generated->save();
			} else {
				$this->msg .= "\nAlready Present $key";
			}
		}
		$content->processing_status = self::JOB_PRESET_CREATION_DONE;
		$content->save();
	}
	/**
	Generating the necessary preset types . Looks up the db for the status
	of the preset processing and based on that
	*/
	public function action_generate_preset() {
		
		$query = DB::update('generated_contents')
		->set(array('preset_processing_status' => 0))
		->where('preset_processing_status', '=', Model_Content::PROCESSING_PRESET_STARTED)
		->and_where('processing_started_at','<' , time() - 5* 60);
		$query->execute();
		
		if (!$this->user) {
			$this->result['continue'] = false;
			//return;
		}
		
		$count = ORM::factory('content_generated')
		->where('content_generated.preset_processing_status','=',
			Model_Content::PROCESSING_PRESET_STARTED)
		->count_all();
		
		$this->result['queue'] = $count;
		
		if ($count > 4) {
			/**
			If there are 4 or more jobs in the queue dont start a
			preset generation that might overload the system we just 
			check if we can create more presets which is less costly
			*/
			$this->action_create_preset();
			$this->result['continue']  = false;
			return;
		}
		
		$this->msg .= "\nCurrently Processing:".$count;
		$generated = ORM::factory('content_generated')
    	->with('content')
    	->where('content_generated.preset_processing_status','=',
    		Model_Content::PROCESSING_PRESET_WAITING)
    	->order_by('id','ASC')
    	->find();
    	
    	if (!$generated->loaded()) {
    		$this->action_create_preset();
    		return;
    	}
    	
    	$this->msg .= "\nProcessing - "
    	.$generated->parent_id." of {$generated->parent->type } generating "
    	.$generated->preset_type. " on {$generated->id}";
    	
    	$file_item = null;
    	
    	switch($generated->parent->type) {
			case 'image':
				$file_item = 
					ORM::factory('content_image',$generated->parent_id);
				break;
			case 'video':
				$file_item = 
					ORM::factory('content_video',$generated->parent_id);
				break;
			case 'audio':
				$file_item = 
					ORM::factory('content_audio',$generated->parent_id);
				
				break;
			case 'text':
				
    		break;
    	}
    	 
    	if ($file_item != null) {
    		/**
    		Do the preset creation 
    		*/
			$generated->preset_processing_status = Model_Content::PROCESSING_PRESET_STARTED;
    		$generated->processing_started_at = time();
    		$generated->save();
    		$this->msg .= "\nStart processing  time:".microtime(true);
			$file_item->generate_preset($generated->preset_type);
			if (isset($file_item->ffmpeg_service) ){
					$this->msg .= $file_item->ffmpeg_service->output_str;
			}
    		$this->msg .= "\nEnd  processing  time:".microtime(true);
    		$this->msg .= "\nProcessed  - ".$file_item->id;
    	}
    	
    	$this->msg .= "\nDone\n";
		
	}
	
	
	public function action_test_ffmpeg() {
	
		echo "Testing ...";
		$ffmpeg = new Model_Service_FFMPEG(
			DOCROOT.'/media/01000/00000/00000/00028/1000000000000000028_7000000000000000382_o.avi');
		echo $ffmpeg->output_str;
		echo "\nwidth:".$ffmpeg->info_parser->getFrameWidth();
		echo "\neight:".$ffmpeg->info_parser->getFrameHeight();
		echo "\n";
		print_r($ffmpeg->info_parser->getResult());
		
	}
}                         
