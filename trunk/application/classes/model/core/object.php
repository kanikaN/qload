<?php

class Model_Core_Object extends Model {
 
    protected $id;
    protected $created_at;
    
    public function __construct($id = null ) {
        if ($id == null) {
            $this->created_at = time();
        } else {
            $this->load($id);
        }
    }
    
    public function get_created_at() {
        return $this->created_at;
    }
    
    public function set_created_at($at) {
        $this->created_at = $at;
        return $this;
    }

    public function getId() {
        return $id;
    }
    
    
    public function load($id) {
    
       return $this;
    }
    
    public function save() {
        return $this;
    }
    
}
