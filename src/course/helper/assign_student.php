<?php  
	
	include '../../connect/connect.php';

	$course_code = $_POST['course_code'];
	$student_id = $_POST['student_id'];

	for ($i=0; $i < count($student_id); $i++) { 
		
		$sql = "INSERT INTO student_allocation(course_code,student_id) VALUES('$course_code','$student_id[$i]')";
		$result = mysqli_query($connection,$sql);

	}

	echo "Students Assined to ".$course_code;
?>