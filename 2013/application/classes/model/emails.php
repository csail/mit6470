<?php
defined('SYSPATH') or die('No direct script access.');

class Model_Emails extends Kohana_Model
{
	
	public static function addEmail($email) {
		$cnt = DB::select(DB::expr('COUNT(*) as cnt'))
		   ->from('emails')
		   ->where('email', '=', $email)
		   ->execute()
		   ->get('cnt');
		if ($cnt) {
		   return 'already_have';
		}

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
	}
	
    public static function listEmails() {
        return DB::select(DB::expr('*'))
			->from('emails')
			->execute()
			->as_array('email', 'email');
	}

}
