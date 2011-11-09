<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_IndexTemplate {

	public function action_index()
	{
		$this->template->footer = '';		
		$this->template->content = View::factory('home/index');
	}
	
	public function action_register()
	{
		$post = Validation::factory($_POST)
			->rule('email', 'email');
		
    	$data = array();
		$data['email'] = TRUE;
        if($post->check()){
			$result = Model_Emails::addEmail($post['email']);
			if ($result == 'already_have') {
				$data['email_status_msg'] = 'Looks like we already have your email on record!';				
			} else if ($result == 'success' || $result == 'mult_error') {
				$data['email_status_msg'] = 'Thanks!';
			} else if ($result == 'error') {
				$data['email_status_msg'] = 'An error occurred.';
			}
		} else {
			$data['email_status_msg'] = 'Invalid email. Please try again.';
		}
		
		$this->template->content = View::factory('home/index', $data);
	}

}
