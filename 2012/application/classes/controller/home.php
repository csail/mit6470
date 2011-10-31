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
		if($post->check()){
			$result = Model_Emails::addEmail($post['email']);
			$data['success'] = TRUE;
		} else {
			$data['success'] = FALSE;
		}
		
		$this->template->content = View::factory('home/index', $data);
	}

}