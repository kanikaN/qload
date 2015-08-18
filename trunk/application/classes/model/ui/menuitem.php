<?php
class Model_Ui_Menuitem {

	var $path;
	var $name;
	var $id = null;
	var $active = false;
	public function __construct($name , $path) {
		$this->path = $path;
		$this->name = $name;
	}
}
