<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Competition extends Controller_MIT6470Template {

	public function action_index() {
		
	}

	public function action_challenge() {
		$this->template->content = View::factory('competition/challenge');
	}

	public function action_rules() {
		$this->template->content = View::factory('competition/rules');		
	}

	public function action_milestones() {
		$this->template->content = View::factory('competition/milestones');		
	}
	
	public function action_prizes() {
		$this->template->content = View::factory('competition/prizes');
	}
}