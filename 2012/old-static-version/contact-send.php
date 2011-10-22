<?php

// TO EMAIL
//
// Enter the email address you want to recieve the messages sent
// from your website contact form. 
// ----------------------------------------------------------------


$YourEmailAddress = "yourname@yourwebsite.com";	



// Do not edit beyond this point if you are not familiar with php
// ----------------------------------------------------------------

error_reporting (E_ALL ^ E_NOTICE);
$post = (!empty($_POST)) ? true : false;
if($post) {
	function ValidateEmail($email){

		$regex = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
		$eregi = preg_replace($regex,'', trim($email));
		
		return empty($eregi) ? true : false;
	}

	$name = stripslashes($_POST['ContactName']);
	$to = $YourEmailAddress; //trim($_POST['to']);
	$email = trim($_POST['ContactEmail']);
	$subject = stripslashes($_POST['subject']);
	$message = stripslashes($_POST['ContactComment']);
	$phone = stripslashes($_POST['ContactPhone']);
	$error = '';
	$Reply=$to;
	$from=$to;
	
	// Check Name Field
	if(!$name) {
		$error .= 'Please enter your name.<br />';
	}
	
	// Checks Email Field
	if(!$email) { 
		$error .= 'Please enter an e-mail address.<br />';
	}
	if($email && !ValidateEmail($email)) {
		$error .= 'Please enter a valid e-mail address.<br />';
	}
	if(is_numeric($phone) && strlen($phone) < 8) {
		$error .= "Please enter your full phone number.<br />";
	}

	// Checks Subject Field
	if(!$subject) {
		$error .= 'Please enter your subject.<br />';
	}
	
	// Checks Message (length)
	if(!$message || strlen($message) < 3) {
		$error .= "Please enter your message. It should have at least 5 characters.<br />";
	}
	
	// Let's send the email.
	if(!$error) {
		$messages="From: $email <br>";
		$messages.="Name: $name <br>";
		$messages.="Email: $email <br>";
		$messages.="Phone: $phone <br>";
		$messages.="Message: $message <br>";
		$emailto=$to;
		
		$mail = mail($emailto,$subject,$messages,"from: $from <$Reply>\nReply-To: $Reply \nContent-type: text/html");	
	
		if($mail) {
			echo 'success';
		}
	} else {
		echo '<div class="error">'.$error.'</div>';
	}

}
?>