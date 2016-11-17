<?php  
	
	include '../../connect/connect.php';

	$course_code = $_POST['course_code'];
	$criteria = $_POST['criteria'];
	$weight = $_POST['weight'];

	for ($i=0; $i < count($criteria); $i++) { 
		
		$sql = "INSERT INTO marks_distribution(course_code,distribution_criteria,distribution_weight) VALUES('$course_code','$criteria[$i]','$weight[$i]')";
		$result = mysqli_query($connection,$sql);

	}

	echo "Marks Distribution done for ".$course_code;
?>