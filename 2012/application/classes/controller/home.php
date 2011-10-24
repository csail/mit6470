<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_IndexTemplate {

	public function action_index()
	{
		$this->template->footer = '';
		
		$this->template->content = View::factory('home/index');
	}

}