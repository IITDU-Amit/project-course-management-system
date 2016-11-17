<?php

    include '../../connect/connect.php';

    $student_id = $_POST['student_id'];
    $course_code = $_POST['course_code'];

    $sql = "DELETE FROM student_allocation WHERE course_code='$course_code' AND student_id='$student_id'";
    $result = mysqli_query($connection, $sql);

    if ($result) {
    	
    	echo 'Student removed from '.$course_code.'!';
    }

    else{

    	echo "Sorry. Something is wrong!";
    }

?>