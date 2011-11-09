<?php
defined('SYSPATH') or die('No direct script access.');

class Model_Emails extends Kohana_Model
{
	public static function addEmail($email) {
		try {
			Kohana::$log->add('Info', 'Attempting to insert email: ' . $email);
			list($insert_id, $num_rows) = DB::insert('emails', array('email'))
				->values(array($email))
				->execute();
			if ($num_rows == 0) {
				return 'already_have';
			} else if ($num_rows == 1) {
				return 'success';
			} else {
				return 'mult_error';
			}
		} catch (Exception $e) {
			return 'error';
		}
	}

}
