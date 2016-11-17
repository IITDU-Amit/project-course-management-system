<?php

	include '../../connect/connect.php';

	$course_code = $_POST['course_code'];
	$distribution_id = $_POST['distribution_id'];
	$student_id = $_POST['student_id'];
	$marks = $_POST['marks'];

/*	$course_code = "SE-605";
	$distribution_id = array("9", "5", "8", "2");
	$student_id = array("2", "3", "4", "6", "7");
	$marks = array("8.00", "16.00", "25.00", "32.00", "9.00", "19.00", "26.00", "31.00", "9", "18", "26", "33", "8", "15", "24", "30", "9", "14", "26", "31");*/


	$total_student = count($student_id);
	$total_distribution = count($distribution_id);

	$result_array = array();


	for ($i=0; $i < $total_student; $i++) { 
		
		for ($j=0; $j < $total_distribution; $j++){

			$marks_index = ($i*$total_distribution)+$j;


			$sql1 = "SELECT mark FROM marks WHERE course_code='$course_code' AND student_id='$student_id[$i]' AND distribution_id='$distribution_id[$j]'";
			$result1 = mysqli_query($connection,$sql1);
			$row1 = mysqli_fetch_assoc($result1);

			if (empty($row1)) {

				$sql2 = "INSERT INTO marks(course_code, student_id, distribution_id, mark) VALUES ('$course_code', '$student_id[$i]', '$distribution_id[$j]', '$marks[$marks_index]')";

				$result2 = mysqli_query($connection, $sql2);

				array_push($result_array, $result2);
				
			}

			else {

				$sql2 = "UPDATE marks SET mark='$marks[$marks_index]' WHERE course_code='$course_code' AND student_id='$student_id[$i]' AND distribution_id='$distribution_id[$j]'";
				
				$result2 = mysqli_query($connection,$sql2);

				array_push($result_array, $result2);
			}

		}

	}

	for ($i=0; $i < count($result_array); $i++) { 
		
		if (!$result_array[$i]) {
			
			echo "Sorry. Something is wrong";
			exit();
		}
	}

	echo "Marks saved successfully";

?>