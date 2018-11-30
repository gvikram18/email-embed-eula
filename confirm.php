<?php

	function redirect() {
		header('Location: register.php');
		exit();
	}
	function verified() {
		header('Location: verified.php');
		
	}

	if (!isset($_GET['email']) || !isset($_GET['token'])) {
		redirect(); #contact support@ivtree.com
	} else {
		$con = new mysqli('localhost', 'root', 'ivtree123', 'action-plan');

		$email = $con->real_escape_string($_GET['email']);
		$token = $con->real_escape_string($_GET['token']);

		$sql = $con->query("SELECT id FROM users WHERE email='$email' AND token='$token' AND isEmailConfirmed=0 AND responded='$responded'");

		if ($sql->num_rows > 0) {
			date_default_timezone_set('Asia/Kolkata');
			$responded=date("Y-m-d H:i:s");
			$con->query("UPDATE users SET isEmailConfirmed=1, token='', responded='$responded' WHERE email='$email'");
			verified();
		} else
			redirect();
	}
?>