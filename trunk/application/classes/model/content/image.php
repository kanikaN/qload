<?php
/**
Class for halding Image content generated in the system
Takes caer of various preset generation for optimizing performance
and reducing data trasnfer to give a richer experience 
*/
class Model_Content_Image extends Model_Content_Viewable {
    
	/**
	preset key for the 50X50 boxed image
	*/
	const PRESET_SQARE_50_50 = 'sq_50_50';
	
	
	static $preset_config_map = array (
		self::PRESET_THUMB_X_150 => array(
			'ext' => '_x_150', 
			'width'=> null,
			'height' => '150' ,
			'aspect' => null
		),
		self::PRESET_THUMB_200_X => array(
			'ext' => '_200_x', 
			'width'=> 200,
			'height' => null,
			'aspect' => null
		),
		self::PRESET_LARGE_800_X => array(
			'ext' => '_800_x', 
			'width'=> 800,
			'height' => null,
			'aspect' => null
		),
		self::PRESET_SQARE_50_50 => array(
			'ext' => '_50_50', 
			'width'=> 50,
			'height' => 50,
			'aspect' => Image_Gd::INVERSE
		),
	); 
	 
    /**
    Generate all the presets if they are already not generated
    */
    public function generate_preset($key) {
    	$this->preset_preprocess();
    	
    	if ($this->is_preset_ready($key)) {
    		return $this;
    	}
    	
    	$config = self::$preset_config_map[$key];
    	$name = $this->base_file_name."_$key.".$this->file_ext;
    	try {
			$gd = new Image_Gd(DOCROOT.$this->file_path);
			$gd->resize($config['width'],$config['height'],$config['aspect']);
			$gd->save(DOCROOT.$name);
			$this->add_generated_file($name,$key);
		} catch(Exception $e) {
    		$this->mark_generated_as_error($key);
    	}
    	return $this;
    }
    /**
    Genrates the necessary thumb nails for the image
    */
    public function generate_urgent_presets() {
		parent::generate_urgent_presets();
		
		return $this->generate_preset(self::PRESET_THUMB_X_150)
		->generate_preset(self::PRESET_THUMB_200_X)
		->generate_preset(self::PRESET_LARGE_800_X);
	}
}

