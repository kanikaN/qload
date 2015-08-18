<?php 
defined('SYSPATH') or die('No direct script access.');
/**
Handling various stats requirements


*/
class Controller_Stats extends Controller_Core_Template {
	/**
	Action for listing all the stimulus present in a channel .
	*/
    public function action_index() {
    	$this->_auto_render = false;
		
    	if ($this->channel) {
    		$this->request->redirect();
    	}
    	
    	$query =  	DB::query(Database::SELECT,
    		"select channel_name, count(*) as count from submissions 
    		left join users on submissions.owner_id = users.id
    		left join channels on channels.id = users.channel_id
    		where submissions.status ='".Model_Submission::STATUS_PUBLISHED."'
    		group by channels.id");
		$results = $query->as_object()->execute();
		
		echo "<html><body><div class=\"stats\">";
		echo "<table style=\"width:50%\" border=\"1\">";
		echo"<tr style=\"background:lightgreen\"><th>Channel Name</th><th># Of Submissions Published</th></tr>";
		
		foreach($results as $item)
		{
			if (empty($item->channel_name) ) {
				$item->channel_name = 'Direct'	;
			}
			echo"<tr><td>{$item->channel_name}</td><td>{$item->count}</td></tr>";
				}
    	echo "</table>";
    	
    	
    	
    	$query =  DB::query(Database::SELECT,
    		"select channel_name, count(*) as count from submissions 
    		left join users on submissions.owner_id = users.id
    		left join channels on channels.id = users.channel_id
    		where submissions.status ='".Model_Submission::STATUS_DRAFT."'
    		group by channels.id");
		$results = $query->as_object()->execute();
		$this->_auto_render = false;
		
		echo "<html><body><div class=\"stats\">";
		echo "<table style=\"width:50%\" border=\"1\">";
		echo"<tr style=\"background:lightgreen\"><th>Channel Name</th><th># Of Submissions Draft</th></tr>";
		
		foreach($results as $item)
		{
			if (empty($item->channel_name) ) {
				$item->channel_name = 'Direct'	;
			}
			echo"<tr><td>{$item->channel_name}</td><td>{$item->count}</td></tr>";
				}
    	echo "</table>";
    	
    	$query =  	DB::query(Database::SELECT,
    		"select channel_name, count(*) as count from users 
    		left join channels on channels.id = users.channel_id
    		where users.status = '".Model_User::STATUS_ACTIVATED."' 
    		group by channels.id ");
    	
    	$results = $query->as_object()->execute();
		
    	echo "<table style=\"width:50%\" border=\"1\">";
		echo"<tr style=\"background:lightgreen\"><th>Channel Name</th><th># Of Users Activated</th></tr>";
		
		foreach($results as $item)
		{
			if (empty($item->channel_name) ) {
				$item->channel_name = 'Direct'	;
			}
			echo"<tr><td>{$item->channel_name}</td><td>{$item->count}</td></tr>";
		}
    	echo "</table>";
    	
    	$query =  	DB::query(Database::SELECT,
    		"select channel_name, count(*) as count from users 
    		left join channels on channels.id = users.channel_id
    		where users.status = '".Model_User::STATUS_APPLIED."' 
    		group by channels.id ");
    	
    	$results = $query->as_object()->execute();
		
    	echo "<table style=\"width:50%\" border=\"1\">";
		echo"<tr style=\"background:lightgreen\"><th>Channel Name</th><th># Of Users Pending Activation</th></tr>";
		
		foreach($results as $item)
		{
			if (empty($item->channel_name) ) {
				$item->channel_name = 'Direct'	;
			}
			echo"<tr><td>{$item->channel_name}</td><td>{$item->count}</td></tr>";
		}
    	echo "</table>";
    	
    	echo "</div></body></html>";
	}
	
	
	public function action_channel() {
		
	}
}
