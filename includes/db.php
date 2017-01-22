<?php
	
	$server = 'localhost';
	$user = 'ashik';
	$password = '12345';
	$db = 'school_management';

	$conn = mysqli_connect($server, $user, $password, $db);

	if (!$conn) {
		die("Connection Failed!:".mysqli_connect_error());
	}
?>