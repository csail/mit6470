<?php defined('SYSPATH') or die('No direct script access.');

class Controller_About extends Controller_MIT6470Template {

	public function action_index()
	{
	}
	
	public function action_overview()
	{
		$this->template->content = View::factory('about/overview');
	}
	
	public function action_staff()
	{
		$this->template->content = View::factory('about/staff');
	}

}