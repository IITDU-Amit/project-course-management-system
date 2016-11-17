<?Php

	include '../../connect/connect.php';

	$course_code = $_POST['course_code'];

	$sql = "SELECT course_code FROM course WHERE course_code='$course_code'";
	$result = mysqli_query($connection, $sql);

	if (!mysqli_fetch_assoc($result)) {
		echo $course_code." not found!";
	}

	else{

		$sql = "DELETE FROM course WHERE course_code='$course_code'";
		$result = mysqli_query($connection, $sql);

		if ($result){
			echo $course_code." successfully removed.";
		}

		else{
			echo "Something is wrong.";
		}
	}

?>