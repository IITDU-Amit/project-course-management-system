<?php 
	
	session_start();
		
	include '../connect/connect.php';

		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM user WHERE email='$email'";
		$result = mysqli_query($connection, $sql);
		$row = mysqli_fetch_assoc($result);

		if ($row['password']==$password){
			$_SESSION['login_id']=$row['user_id'];
			$_SESSION['login_email']=$row['email'];
			$_SESSION['login_type']=$row['user_type'];
			echo "Logged in";
		}

		else {

			$sql = "SELECT * FROM student WHERE email='$email'";
			$result = mysqli_query($connection, $sql);
			$row = mysqli_fetch_assoc($result);

			if ($row['password']==$password){
				$_SESSION['login_id']=$row['student_id'];
				$_SESSION['login_email']=$row['email'];
				$_SESSION['login_type']="student";
				echo "Logged in";
			}

			else {
				echo "Sorry";
			}
		}

?>