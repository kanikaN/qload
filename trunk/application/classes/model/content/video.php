<?php
/**
Model for handlign the Video content in the system
takes care of generating various presets 
*/
class Model_Content_Video extends Model_Content_Viewable {
  
	/**
	presets for the images required
	*/
	const PRESET_IMAGE_640_X = 'IMAGE_640_X';
	const PRESET_IMAGE_320_X = 'IMAGE_320_X';
	/**
	presets for the mp4 video
	*/
	const PRESET_VIDEO_MP4_640_X = 'VIDEO_MP4_640_X';
	const PRESET_VIDEO_MP4_320_X = 'VIDEO_MP4_320_X';
	/**
	presets for the webm video
	*/
	const PRESET_VIDEO_WEBM_640_X = 'VIDEO_WEBM_640_X';
	const PRESET_VIDEO_WEBM_320_X = 'VIDEO_WEBM_320_X';
	/**
	presets for the flv video
	*/
	const PRESET_VIDEO_FLV_320_X =  "VIDEO_FLV_320_X";
	const PRESET_VIDEO_FLV_640_X =  "VIDEO_FLV_640_X";
	
	/**
	@var Model_Service_FFMPEG the ffmpeg service userd 
	*/
	var $ffmpeg_service = null;
	
	
	static $preset_config_map = array (
		
		self::PRESET_VIDEO_FLV_320_X => array(
			'ext'=>'_320_X.flv',
			'width' => 320,
			'height'=> 240,
			'type'=> 'video',
			"mime" => 'video/x-flv'
		),
		self::PRESET_VIDEO_FLV_640_X => array(
			'ext'=>'_640_X.flv',
			'width' => 640,
			'height'=> 480,
			'type'=> 'video',
			"mime" => 'video/x-flv'
		),
		self::PRESET_THUMB_X_150 => array(
			'ext'=> '_X_150.jpg',
			'width'=> null,
			'type'=> 'image',
			'height' => 150
		),
		self::PRESET_IMAGE_640_X => array(
			'ext' => '_640_X.jpg', 
			'width'=> 640,
			'type'=> 'image',
			'height' => 480
		),
		self::PRESET_IMAGE_320_X => array (
			'ext'=> '_320_X.jpg',
			'width' => 320,
			'type'=> 'image',
			'height' => 240
		),
		self::PRESET_VIDEO_MP4_640_X => array(
			'ext'=>'_640_X.mp4',
			'width' => 640,
			'height'=> 480,
			'type'=> 'video',
			"mime" => 'video/mp4'
		),
		self::PRESET_VIDEO_MP4_320_X => array(
			'ext'=>'_320_X.mp4',
			'width' => 320,
			'height'=> 240,
			'type'=> 'video',
			"mime" => 'video/mp4'
		),
		self::PRESET_VIDEO_WEBM_640_X => array(
			'ext'=>'_640_X.webm',
			'width' => 640,
			'height'=> 320,
			'type'=> 'video',
			"mime" => 'video/webm'
		),
		self::PRESET_VIDEO_WEBM_320_X => array(
			'ext'=>'_320_X.webm',
			'width' => 640,
			'height'=> 480,
			'type'=> 'video',
			"mime" => 'video/webm'
		),
		
		
	); 
	/**
	Generates  thumbnails for handling various requirements
	*/
    protected function generate_image($key) {
    	
    	if ($this->is_preset_ready($key)) {
    		return $this;
    	}
    	
    	$obj = self::$preset_config_map[$key];
    	$name = $this->base_file_name.$obj['ext'];
    	$this->ffmpeg_service->grab_thumbnail_width_height(
    		DOCROOT.$name,
    		$obj['width'], 
    		$obj['height']
    	);
    	
    	$this->add_generated_file(
    		$name,
    		$key,
    		'image/jpeg'
    	);
    	
    	return $this;
    }
    
    /**
    Transcode to necessary formats
    */
	protected function generate_video($key) {
		
    	if ($this->is_preset_ready($key)) {
    		return $this;
    	}
    	
    	$config = self::$preset_config_map[$key];
    	$name = $this->base_file_name.$config['ext'];
    	
    	$result = $this->ffmpeg_service
    		->transcode_video(DOCROOT.$name, $config);
    	if (file_exists(DOCROOT.$name) && $result) {
    		echo "SUCEESS...";
    		$this->add_generated_file($name,$key,$config['mime']);
    	} else {
    		echo "ERROR...";
    		$this->mark_generated_as_error($key);
    	}
    	return $this;
	}
	
	/**
	Generates all the presets required
	*/
	public function generate_preset($key) {
		$this->preset_preprocess();
    	
		if ($this->ffmpeg_service == null) {
			$this->ffmpeg_service = new Model_Service_FFMPEG(DOCROOT.$this->file_path,0);
    	}
    	//echo "\ngenerating $key";
		$obj = @self::$preset_config_map[$key];
		
		
		if (empty($obj)) {
			$this->mark_generated_as_error($key);
		} else if ($obj['type'] == 'video') {
			$this->generate_video($key);
		} else if ($obj['type'] == 'image') {
			$this->generate_image($key);
		}
		return $this;
	}
	/**
	Thumbnail generation for the video
	*/
    public function generate_urgent_presets() {
		return $this->generate_preset(self::PRESET_IMAGE_640_X)
			->generate_preset(self::PRESET_IMAGE_320_X)
			->generate_preset(self::PRESET_THUMB_X_150);
	}
	
}

