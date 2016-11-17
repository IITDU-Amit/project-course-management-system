<?php

	include '../../connect/connect.php';

	$course_code = $_POST['course_code'];
	$start_date = $_POST['start_date'];
	$end_date = $_POST['end_date'];


	$sql = "UPDATE course SET start_date='$start_date', end_date='$end_date' WHERE course_code='$course_code'";
	$result = mysqli_query($connection, $sql);

	$mysqli_affected_rows = mysqli_affected_rows($connection);

	if ($mysqli_affected_rows > 0) {
			
		echo "Marks entry date has been set for $course_code";
	}

	else{

		echo "Something is wrong!";
	}

?>