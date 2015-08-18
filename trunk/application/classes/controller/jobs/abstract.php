<?php
defined('SYSPATH') or die('No direct script access.');
/**
Class for handling jobs on Content
*/
class Controller_Jobs_Abstract extends Controller_Core_Access {
	
	/**
	@var boolean overriding the base class - for jobs to run from
	cron Or messaging queue no authorization is requesred
	*/
	protected $_auth_required = false;
}                         
