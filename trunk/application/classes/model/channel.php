<?php
/**
Model for halding the Channel requirements for qload scope
*/
class Model_Channel extends Model_Base {
	/**
	@var string name field to be used for the purpose
	*/
	 protected $_name_field = 'channel_name'; 
	 
	 public function formo() {
        return array (
            'id' => array
            (
                'render' => false
            ),
        );
    }
}
