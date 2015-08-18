<?php
defined('SYSPATH') or die('No direct script access.');

require_once Kohana::find_file('vendor', 'amazon_sdk/sdk.class');
require_once Kohana::find_file('vendor', 'amazon_sdk/services/rds.class');

class Controller_Jobs_db extends Controller_Core_Access {

	public function action_params() {
		$rds = new AmazonRDS();
		$rds->set_region(AmazonRDS::REGION_SINGAPORE);
		/*
		$res = $rds->describe_db_parameters("default.mysql5.5");
		$res = $rds->describe_db_parameters("default.mysql5.5",array("Marker"=> 
			$res->body->DescribeDBParametersResult->Marker));
	
		print_r($res->body->DescribeDBParametersResult);
		*/
		$res = $rds->modify_db_parameter_group("slow-query-log",array(
			array(
				"ParameterName"=> "slow_query_log",
				"ApplyMethod" => "immediate" ,
				"ParameterValue"=> 1)
			));
		print_r($res);
	
	}
}
