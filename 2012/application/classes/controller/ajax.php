<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller {
	public function action_runMysqlCode() {
		$code = $_GET['code'];
		$response = array(array('alpha', 'beta', 'chi'), array('d', 'e', 'f'), array('g', 'h', 'i'));
		echo json_encode($response);
	}

}