<?php
/**
Class base class for handling various content in the system 

Stores meta information about he processing status of contents

*/
class Model_Content extends Model_Base {
	
	
	/**
	Status of the generated content
	*/
	
	const PROCESSING_PRESET_WAITING = 0;
	const PROCESSING_PRESET_STARTED = 1;
	const PROCESSING_PRESET_DONE = 2;
	const PROCESSING_PRESET_ERROR = 3;
	
	protected $_table_name = 'contents'; 
    protected $_name_field = 'caption';
    
    /**
    map for storing various preset contets 
    generated from the actual content.
    */
    protected $generated_presets_map = null;
  
    public function formo(){
        return array (
            'id' => array (
                'render' => false
            ),
        );
    }
    
    /**
    Adds the basic information to the Content Entry
    */
    public function add_content_caption($caption) {
    	$this->created_at = time();
    	$this->modified_at = time();
    	$this->caption = $caption;
    	$this->owner_id = Session::instance()->get('user_id');
    }
    
    /**
    Loads the generated  preset information to the content context
    */
    public function load_generated_presets($force = false) {
		if ($this->generated_presets_map != null && !$force) {
			return $this;
		}
		$this->generated_presets_map = array();
		
		$list = ORM::factory('content_generated')
		->where('parent_id', '=', $this->id)
		->find_all();
		
		foreach($list as $item) {
			$this->generated_presets_map[$item->preset_type] = $item;
		}
		return $this;
	}
	
	/**
	Adds a the generated file meta to the generated content table
	
	*/
	
	public function add_generated_file($path,$type, $mime = null) {
	
		if (!isset($this->generated_presets_map[$type])) {
			$generated = new Model_Content_Generated();
			$generated->processing_started_at = time();
		} else {
			$generated = $this->generated_presets_map[$type];
		}
		
    	$generated->parent_id = $this->id;
    	$generated->file_path = $path;
    	$generated->preset_type = $type;
    	$generated->processing_ended_at = time();
    	$generated->preset_processing_status = self::PROCESSING_PRESET_DONE;
    	if ($mime == null) {
    		$generated->mime_type = $this->mime_type;
    	} else {
    		$generated->mime_type = $mime;
    	}
    	$generated->save();
    	
    	$this->generated_presets_map[$type] = $generated;
    	return $this;
	}
	/**
	update the generated content with Processing Error state
	*/
	public function mark_generated_as_error($type) {
		if (!isset($this->generated_presets_map[$type])) {
			$generated = new Model_Content_Generated();
			$generated->preset_type = $type;
		} else {
			$generated = $this->generated_presets_map[$type];
		}
		echo "saving error {$generated->id }";
	
		$generated->processing_ended_at = time();
    	$generated->preset_processing_status = self::PROCESSING_PRESET_ERROR;
    	$generated->save();
	}
	/**
	Checks if the preset is beging created in the system
	*/
    public function is_preset_created($preset_type)  {
    	return isset($this->generated_presets_map[$preset_type]);
    }
    /**
    Checks if the presetis ready to be consumed
    */
    public function is_preset_ready($preset_type) {
    	if (isset($this->generated_presets_map[$preset_type]) &&
			$this->generated_presets_map[$preset_type]->preset_processing_status
		== self::PROCESSING_PRESET_DONE ) {
		return true;
		}
		return false;
    }
    
    /**
    Returns the generated preset for consumption
    */
    
    public function get_generated_preset($preset_type) {
		$this->load_generated_presets();
		
		if ($this->is_preset_ready($preset_type)) {
			return $this->generated_presets_map[$preset_type];
		}
		return null;
	}
	/**
	Gets the preset as such , consumer of this interface should take care of 
	the status check
	*/
	
	public function get_preset($preset_type) {
		$this->load_generated_presets();
		return $this->generated_presets_map[$preset_type];
	}
	
}
