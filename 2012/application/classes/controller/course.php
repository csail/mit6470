<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Course extends Controller_MIT6470Template {

	public function action_index() {
		
	}

	public function action_schedule() {
		$this->template->content = View::factory('course/schedule');
	}

	public function action_video() {
		$this->template->content = View::factory('course/video');		
	}

	public function action_guest_lectures() {
		$this->template->content = View::factory('course/guest_lectures');		
	}

	public function action_assignments() {
		$this->template->content = View::factory('course/assignments');		
	}

}