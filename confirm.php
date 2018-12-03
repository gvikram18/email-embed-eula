<?php

	function userpresent() {
		header('Location: userpresent.php');
		exit();
	}
	function verified() {
		header('Location: verified.php');
		exit();                                  //only two listed functions work. More than two, will face glitch.
	}
	function error() {
		header('Location: error.php');
		exit();
	}

	

	if (!isset($_GET['email']) || !isset($_GET['token']))
		error(); #contact support@ivtree.com 'Error establishing database connection'
	
	else {
		$con = new mysqli('localhost', 'root', 'ivtree123', 'action-plan');

		$email = $con->real_escape_string($_GET['email']);
		$token = $con->real_escape_string($_GET['token']);
		

		$sql = $con->query("SELECT id FROM users WHERE email='$email' AND token='$token' AND isEmailConfirmed=0 AND responded='0000-00-00 00:00:00'");

		if ($sql->num_rows > 0) {
			date_default_timezone_set('Asia/Kolkata');
			$responded=date("Y-m-d H:i:s");
			$con->query("UPDATE users SET isEmailConfirmed=1, token='', responded='$responded' WHERE email='$email'");
			verified();
		} 
		else
			userpresent();		
	}
?>