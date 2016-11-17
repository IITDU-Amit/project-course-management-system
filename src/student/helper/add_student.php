<?Php

	include '../../connect/connect.php';

	$name = $_POST['name'];
	$email = $_POST['email'];

	$sql = "SELECT email FROM student WHERE email='$email'";
	$result = mysqli_query($connection, $sql);

	if (mysqli_fetch_assoc($result)) {
		echo 'Sorry. '.$email.' already exist!';
	}

	else {

		$sql = "INSERT INTO student(name,email) VALUES('$name','$email')";
		$result = mysqli_query($connection, $sql);

		if ($result){
			echo $email." successfully added!";
		}

		else{
			echo "Something is wrong";
		}

	}


?>