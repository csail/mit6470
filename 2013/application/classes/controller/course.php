<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Course extends Controller_MIT6470Template {

	public function before(){
		parent::before();
		$this->template->scripts[] = 'assets/js/course.js';
	}

	public function action_index() {
		
	}

	public function action_intro() {
		$this->template->content = View::factory('course/intro');
  }

    public function action_html() {
      $this->template->content = View::factory('course/html');
    }

    public function action_css() {
		$this->template->content = View::factory('course/css');
    }

    public function action_design() {
		$this->template->content = View::factory('course/design');
    }

    public function action_js() {
		$this->template->content = View::factory('course/js');
    }

    public function action_php() {
		$this->template->content = View::factory('course/php');
    }

    public function action_mysql() {
		$this->template->content = View::factory('course/mysql');
    }

	public function action_video() {
		$this->template->scripts[] = 'assets/js/video.js';
		$this->template->styles['assets/css/video-js.css'] = 'screen';
		$this->template->content = View::factory('course/video');		
	}

	public function action_lectures() {
		if (isset($_GET['topic'])) {
			$topic = HTML::chars($_GET['topic']);
			$this->template->content = View::factory('course/lectures/'.$topic);			
		} else {
			$this->template->content = View::factory('course/lectures');
		}
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

    public function action_video_temp() {
        $this->template->content = View::Factory('course/video_temp');
    }
}
