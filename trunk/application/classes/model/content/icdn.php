<?php
/**
Interface for handling the CDN routing of contents 
If we want to have multiple CDNS and the content routring is to be 
hapepend from here - the logic goes in here
*/
interface Model_Content_ICDN {

	public function get_cdn_path();
}
