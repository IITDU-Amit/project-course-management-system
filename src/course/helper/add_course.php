<?Php

	include '../../connect/connect.php';

	$course_name = $_POST['course_name'];
	$course_code = $_POST['course_code'];
	$course_description = $_POST['course_description'];
	$user_id = $_POST['user_id'];


	$sql = "SELECT course_code FROM course WHERE course_code='$course_code'";
	$result = mysqli_query($connection, $sql);

	if (mysqli_fetch_assoc($result)) {
		echo 'Sorry. '.$course_code.' - '.$course_name.' already exist!';
	}

	else {

		$sql = "INSERT INTO course (course_name,course_code,course_description,user_id) VALUES('$course_name','$course_code', '$course_description', '$user_id')";
		$result = mysqli_query($connection, $sql);

		if ($result){
			echo $course_code.' - '.$course_name.' successfully added!';
		}

		else{
			echo "Something is wrong";
		}

	}

?>