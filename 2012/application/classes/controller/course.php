<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Course extends Controller_MIT6470Template {

	public function action_index() {
		
	}

	public function action_schedule() {
		$this->template->content = View::factory('course/schedule');
	}

	public function action_video() {
		$this->template->scripts[] = 'assets/js/video.js';
		$this->template->styles['assets/css/video-js.css'] = 'screen';
		$this->template->content = View::factory('course/video');		
	}

	public function action_guest_lectures() {
		$this->template->content = View::factory('course/guest_lectures');		
	}

	public function action_assignments() {
		$this->template->content = View::factory('course/assignments');		
    }

    public function action_video_new() {
        $this->template->content = View::Factory('course/video_new');
    }

}
