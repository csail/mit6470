<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_MIT6470Template {

	public function action_index()
	{
	}

	public function action_newsletterMinusRegistered() {
		$handle = fopen(APPPATH.'../assets/class_list/roster-2012_01_08.csv', 'r');
		$i = 0;
        $signup_emails = Model_Emails::listEmails();
        $stellar_emails = array();
        while ($data = fgetcsv($handle, 0, ',')) {
			$i += 1;
			if ($i < 3) continue;
			$full_name = $data[0];
			$full_name_split = explode(',', $full_name);
			$first_name = trim($full_name_split[1]);
			$last_name = $full_name_split[0];
            $email = $data[1];
            array_push($stellar_emails, $email);
        }

        $remaining_emails = array();
        foreach ($signup_emails as $email) {

            if (!in_array($email, $stellar_emails)) {
                 array_push($remaining_emails, $email);
                echo $email . ',';
            }
        }
	}
	
	public function action_listStudents() {
		$students = Model_Emails::listEmails();
		echo Debug::vars($students);
	}
}	
