<?php

	include '../../connect/connect.php';

	$question_body = $_POST['question_body'];
	$course_code = $_POST['course_code'];
	$name = $_POST['name'];

	$sql = "INSERT INTO question (question_body, course_code, name) VALUES ('$question_body', '$course_code', '$name')";
	$result = mysqli_query($connection,$sql);

/*	echo $question_body.$course_code.$name;*/

	if ($result) {
		
		echo "Question submitted!";
	}

	else{

		echo "Something is wrong!";
	}
?>