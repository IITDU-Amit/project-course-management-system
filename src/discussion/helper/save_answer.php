<?php

	include '../../connect/connect.php';

	$question_id = $_POST['question_id'];
	$answer = $_POST['answer'];
	$name = $_POST['name'];

	$sql = "INSERT INTO answer (answer_body, name, question_id) VALUES ('$answer', '$name', '$question_id')";
	$result = mysqli_query($connection, $sql);

	if($result){

		echo "Answer Submitted Successfully.";
	}

	else{

		echo "Something is wrong";
	}


?>