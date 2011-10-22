<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_MIT6470Template {

	public function action_index()
	{


		$this->template->content = View::factory('home/index');
	}

} // End Welcome
