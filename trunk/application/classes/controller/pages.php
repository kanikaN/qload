<?php
defined('SYSPATH') or die('No direct script access.');
/**
Pages controller for showing various pages [tos , privacy policy etc]
on the system - we are linking this class with the database table for 
showing pages which provides a rich text editor for storing the page 
data and overriding the file data with the value in the database 


*/
class Controller_Pages extends Controller_Core_Access {
	
	/**
	@var boolean authorization is required or not
	*/
	protected $_auth_required = false;
	
	/**
	Rending the TOS
	*/
	public function action_tos() {
		if (!$this->load_page()) {
			$this->response->body(new View('pages/tos'));
		}
	}
	
	/**
	Rending the privacy policy
	*/
	public function action_privacy_policy() {
		if (!$this->load_page()) {
			$this->response->body(new View('pages/privacy_policy'));
		}
	}
	
	/**
	Rending the report abuse policy
	*/
	public function action_report_abuse() {
		if (!$this->load_page()) {
			$this->response->body(new View('pages/report_abuse'));
		}
	}
	/**
	Rending and checking various email templates
	*/
	public function action_email() {
		$name = $this->request->param('id');
		$this->response->body(new View("email/$name",
			array('context_user'=> $this->user) ));
	}
	
	/**
	Loads a correspoding page from the DB and return that if its present in Table
	*/
	public function load_page() {
		$page = ORM::Factory('page', $this->request->action());
		if ($page->loaded()) {
			$this->response->body($page->page_text);
			return true;
    	}
    	return false;
   }
   
   public function action_feedback() {
   	
   	   
   	   $template = new View('templates/plain');
   	   
   	   $info = null;
   	   $error = null;
   	   if (isset($_POST['submit'])) {
   	   	   
   	   	   $email = isset($_POST['email']) ? $_POST['email']:'' ;
   	   	   $message = isset($_POST['message']) ? $_POST['message']:''; 
   	   	   
   	   	   if($email == '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
   	   	   	   $error = "Please enter your email so we can contact you<br/>";
   	   	   }
   	   	   
   	   	   if($message == '') {
   	   	   	   $error .= "Please tell us more about the problem your are facing.";
   	   	   }
   	   	   
   	   	   if ($error == null) {
   	   	   	   require_once Kohana::find_file('vendor', 'mailer/AmazonSESMailer');

   	   	   	   $mailer = new AmazonSESMailer('AKIAJK43Z3GIIF3XRIJQ', 'z1ZdTXoiNY1/I/JJmyVXfR9mU93kuq5Oo4vjW4cw');
				$mailer->AddAddress("ebfeedback@qyuki.com");
				$mailer->Subject = "Earlybirds user issue:".$_POST['problem'];
				$mailer->SetFrom('noreply@qyuki.com');
				$mailer->MsgHtml($_POST['email']."<br/>".$_POST['phone']."<br/>".$_POST['message']);
				$mailer->Send();
				$_POST['message'] ='';
				$_POST['email'] ='';
				$info = "Thank you for letting us know. We'll get working on this right away. You will hear back from us very soon.";
		   }
   	   }
   	   $msg = null;
   	   if ($info) {
   	   	   $msg = $info;
   	   	   
   	   } else if ($error) {
   	   	   $msg = $error;
   	   } 
   	   
   	   
   	   $template->content  =  new View('pages/feedback',
   	   	   array("message"=> $msg ) );
   	   $this->response->body($template);
   }
}
