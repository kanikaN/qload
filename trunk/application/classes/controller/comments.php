<?php
defined('SYSPATH') or die('No direct script access.');
/**
Controller class for handling the comments interaction.
Adding Comments
Returning comments associated with a particular object

TBI - Webservice intergation for returning comments as a JSON feed
*/
class Controller_Comments extends Controller_Core_Template {
	/**
	@var string Template file to be used for rendering the content
	*/
	protected $_template_file = 'templates/plain';

	/**
	Handles listing comments related to Or positng comments to an entity
	*/
	public function action_view() {
		$id = $this->request->param('id');
		$list = array();
		if (isset($_POST['submit']) && 
			isset($_POST['object_id']) && 
			!empty($_POST['comment_text']) ) {
			$id = $_POST['object_id'];
			$text = $_POST['comment_text'];
			$insert = DB::insert('comments')
			->columns(array(
				'comment_text',
				'object_id', 
				'owner_id',
				'created_at'
			))->values( array(
				$text,
				$id,
				$this->user->id,
				time(),
			));
			list($insert_id, $affected_rows) = $insert->execute();
			$this->add_activity_result($insert_id);
		}
		$query = DB::select()
		->from('comments')
		->join('users','LEFT')
		->on('comments.owner_id', '=','users.id')
		->where('comments.object_id','=',$id)
		->order_by('comments.created_at','DESC');
		$list = $query->as_object()->execute();
		$this->_template->content  = new View(
			'comments/list_view', array(
				'object_id' => $id ,
				'comment_list' => $list
			));	
	}
}
