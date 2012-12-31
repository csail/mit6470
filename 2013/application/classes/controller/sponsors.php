<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Sponsors extends Controller_MIT6470Template {

  public function action_info() {
    $this->template->content = View::factory('sponsors/info');
  }

  public function action_current() {
    $this->template->content = View::factory('sponsors/current');
  }

}
