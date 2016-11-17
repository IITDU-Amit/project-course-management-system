<?php

	include '../../connect/connect.php';

	$course_code = $_GET['course_code'];

	header('Content-Type: text/csv; charset=utf-8');
	header('Content-Disposition: attachment; filename='.$course_code.'.csv');

	$output = fopen("php://output", "w");

	$distribution = array("Name");

	$sql = "SELECT * FROM marks_distribution WHERE course_code='$course_code' ORDER BY distribution_weight ASC";
	$result = mysqli_query($connection, $sql);
	while ($row = mysqli_fetch_assoc($result)) {

		$distribution_title = $row['distribution_criteria'].' ('.$row['distribution_weight'].')';

		array_push($distribution, $distribution_title);

	}

	fputcsv($output, $distribution);


	$sql = "SELECT * FROM student_allocation WHERE course_code='$course_code'";
	$result = mysqli_query($connection, $sql);

	while ($row = mysqli_fetch_assoc($result)) {

		$student_id = $row['student_id'];

		$sql2 = "SELECT name FROM student WHERE student_id='$student_id'";
		$result2 = mysqli_query($connection, $sql2);
		$row2 = mysqli_fetch_assoc($result2);

		$data = array();

		array_push($data, $row2['name']);

	    $sql3 = "SELECT * FROM marks_distribution WHERE course_code='$course_code' ORDER BY distribution_weight ASC";
	    $result3 = mysqli_query($connection, $sql3);

	    while ($row3 = mysqli_fetch_assoc($result3)) {

	    	$distribution_id = $row3['distribution_id'];

	    	$sql4 = "SELECT mark FROM marks WHERE course_code='$course_code' AND student_id='$student_id' AND distribution_id='$distribution_id'";
	        $result4 = mysqli_query($connection,$sql4);
	        $row4 = mysqli_fetch_assoc($result4);

	        array_push($data, $row4['mark']);

	    }

	    fputcsv($output, $data);

	}	

	fclose($output);

?>