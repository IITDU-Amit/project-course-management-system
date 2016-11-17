<?Php

	include '../../connect/connect.php';

	$email = $_POST['email'];

	$sql = "SELECT email FROM student WHERE email='$email'";
	$result = mysqli_query($connection, $sql);
	

	if (!mysqli_fetch_assoc($result)) {
		echo $email." not found!";
	}

	else{

		$sql = "DELETE FROM student WHERE email='$email'";
		$result = mysqli_query($connection, $sql);

		if ($result){
			echo $email." successfully removed.";
		}

		else{
			echo "Something is wrong.";
		}
	}

?>