<?php

	session_start();
		
	include '../connect/connect.php';

	$old_password = $_POST['old_password'];
	$new_password = $_POST['new_password'];
	$confirm_password = $_POST['confirm_password'];

	if($_SESSION['login_type']=="student"){

		$student_id = $_SESSION['login_id'];

		$sql = "UPDATE student SET password='$confirm_password' WHERE student_id='$student_id' AND password='$old_password'";
	
	}

	else{

		$user_id = $_SESSION['login_id'];

		$sql = "UPDATE user SET password='$confirm_password' WHERE user_id='$user_id' AND password='$old_password'";
		
	}

	$result = mysqli_query($connection,$sql);
	$mysqli_affected_rows = mysqli_affected_rows($connection);

	if ($mysqli_affected_rows > 0) {
		
		echo "Password Changed";
	}

	else {

		echo "Sorry Something is wrong";	
	}

?>