<?php

	function redirect() {
		header('Location: register.php');
		exit();
	}
	function verified() {
		header('Location: verified.php');
		exit();
	}

	if (!isset($_GET['email']) || !isset($_GET['token'])) {
		redirect(); #contact support@ivtree.com
	} else {
		$con = new mysqli('localhost', 'root', 'ivtree123', 'action-plan');

		$email = $con->real_escape_string($_GET['email']);
		$token = $con->real_escape_string($_GET['token']);

		$sql = $con->query("SELECT id FROM users WHERE email='$email' AND token='$token' AND isEmailConfirmed=0");

		if ($sql->num_rows > 0) {
			$con->query("UPDATE users SET isEmailConfirmed=1, token='' WHERE email='$email'");
			verified();
		} else
			redirect();
	}
?>