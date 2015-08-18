<?php defined('SYSPATH') or die('No direct script access.');

class View extends Kohana_View {

	public function set_filename($file) {
		//$path = kohana::find_file("views_main",$file);
		//$path === FALSE &&
		if(  ($path = Kohana::find_file("views", $file)) === FALSE) {
			throw new View_Exception('The requested view :file could not be found', array(
				':file' => $file,
			));
		}
		$this->_file = $path;
		return $this;
	}
}
