<?php
defined('SYSPATH') or die('No direct script access.');

class Model_Emails extends Kohana_Model
{
	public static function addEmail($email) {
		try {
			return DB::insert('emails', array('email'))
				->values(array($email))
				->execute();
		} catch (Exception $e) {
			return FALSE;
		}
	}

}
