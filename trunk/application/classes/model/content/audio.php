<?php

/**
Class for handling audio content types
Takes care of necessart preset generation
mp3 with a bit rate of 128 kbs would be a byproduct of this activity
*/
class Model_Content_Audio extends Model_Content_File {
    
   const PRESET_MP3_128 = 'MP3_128';
   var $ffmpeg_service = null;
   static $preset_config_map = array (
		self::PRESET_MP3_128 => array(
			'ext' => '_128.mp3', 
			'bit_rate'=> 128,
			'mime'=>'audio/mp3'
		),
	); 
   
   /**
   Generates the preset
   */
   public function generate_preset($key) {
   	   $this->preset_preprocess();
	   if ($this->is_preset_ready($key)) {
    		return $this;
       }
    	$obj = self::$preset_config_map[$key];
    	$name = $this->base_file_name.$obj['ext'];
    	if ($this->ffmpeg_service == null) {
			$this->ffmpeg_service = new Model_Service_FFMPEG(DOCROOT.$this->file_path,0);
	    }
	    
        $result = $this->ffmpeg_service
    		->transcode_audio(DOCROOT.$name, $obj);
    	if (file_exists(DOCROOT.$name) && $result) {
    		echo "SUCEESS...";
    		$this->add_generated_file($name,$key,$obj['mime']);
    	} else {
    		echo "ERROR...";
    		$this->mark_generated_as_error($key);
    	}
    	
   }
}

