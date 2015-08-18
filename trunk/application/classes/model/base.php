<?php
/**
Base class for objects in the system
Advantages 
1.Integrating a caching layer at object caching level - making use of Memcache
2.gives the flexibility of Kohana ORM with our custom code if ORM is bottleneck

*/
class Model_Base extends ORM {
    /**
    Fix for potential issue in formo core
    */
	var $name = 'default';    
    /**
    fix for issues at formo core
    */
    protected  $_name_field = "name";
    
    protected $session = null;
    
    protected function _load_values(array $values)
    {
        if (isset($values[$this->_name_field]) ) {
            $this->name = $values[$this->_name_field];
        }
        return parent::_load_values($values);
    }
    
}

