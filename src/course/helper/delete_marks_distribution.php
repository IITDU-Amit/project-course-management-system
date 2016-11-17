<?php

    include '../../connect/connect.php';

    $course_code = $_POST['course_code'];

    $sql = "DELETE FROM marks_distribution WHERE course_code='$course_code'";
    $result = mysqli_query($connection, $sql);

    if ($result) {
    	
    	echo "Marks distributions has been deleted!";
    }

    else{

    	echo "Sorry. Something is wrong!";
    }

?>