<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_MIT6470Template {

	public function action_index()
	{
	}

	public function action_importStudents() {
		$handle = fopen(APPPATH.'../assets/class_list/roster-12_18_2011.csv', 'r');
		$i = 0;
		while ($data = fgetcsv($handle, 0, ',')) {
			$i += 1;
			if ($i < 3) continue;
			$full_name = $data[0];
			$full_name_split = explode(',', $full_name);
			$first_name = trim($full_name_split[1]);
			$last_name = $full_name_split[0];
			$email = $data[2];
			echo Debug::vars($data);
		}
	}
	
	public function action_listStudents() {
		$students = Model_Emails::listEmails();
		echo Debug::vars($students);
	}
}	
