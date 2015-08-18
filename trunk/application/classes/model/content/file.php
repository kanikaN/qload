<?php

/**
Model for handling all file system based content in the system
implements the CDN interface - which will be used for providing the CDN path
for content as well as generated presets
*/
class Model_Content_File extends Model_Content_Abstract implements Model_Content_ICDN {
  
	var $base_file_name;
	var $file_ext = null;
	
	var $cdn_prefix = '';
	
	/**
	Returns the CDN path
	*/
	
	public function get_cdn_path() {
		return $this->cdn_prefix.$this->path;
	}
	/**
	sets the content meta information
	*/
	public function set_content($info) {
		$this->add_content_caption($info['file_name']);
		$this->file_path = $info['path'];
		$this->mime_type = $info['mime'];
		$this->type = $info['type'];
		$this->original_file_name = $info['file_name'];
		$this->size = @$info['size'];
		$this->save();
		return $this;
	}
	/**
	Preprocess the content before handling presets 
	*/
	protected function preset_preprocess() {
		$this->load_generated_presets();
		if (!$this->file_ext) {
			$result = explode(".",$this->file_path);
			$len = count($result);
			$this->file_ext = '';
			if ( $len > 0) {
				$this->file_ext = $result[$len -1];
			}
			$basepath = str_replace(".".$this->file_ext,'',$this->file_path);
			$basepath = str_replace("_o",'',$basepath);
			$this->base_file_name = $basepath;
		}
	}
	
	/**
	Handles the urgently required preset generation 
	while these presets are generated the request is kept waiting so no action 
	(transcoding /generating) actions that take more than 2 secodns of time is 
	not accepted in this step
	*/
	public function generate_urgent_presets() {
		$this->preset_preprocess();
	}
	
	/**
	Generates all the presets
	*/
	public function generate_presets() {
		$this->preset_preprocess();
	}
}

