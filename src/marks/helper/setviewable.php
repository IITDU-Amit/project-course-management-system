<?php

	include '../../connect/connect.php';

	$course_code = $_POST['course_code'];
	$distribution_id = $_POST['distribution_id'];
	$viewable = $_POST['viewable'];

	$total_distribution = count($distribution_id);

	for ($j=0; $j < $total_distribution; $j++){

			
		$sql3 = "UPDATE marks_distribution SET viewable='$viewable[$j]' WHERE course_code='$course_code' AND distribution_id='$distribution_id[$j]'";
		$result3 = mysqli_query($connection,$sql3);
	}

	if($result3){

		echo "Marks viewability changed successfully!";
	}

	else{

		echo "Sorry. Something is wrong!";
	}
?>