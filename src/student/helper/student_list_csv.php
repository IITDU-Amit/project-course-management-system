<?php

	include '../../connect/connect.php';

	header('Content-Type: text/csv; charset=utf-8');
	header('Content-Disposition: attachment; filename=Student_List.csv');

	$output = fopen("php://output", "w");
	fputcsv($output, array('#', 'Name', 'Email', 'Contact'));

	$sql = "SELECT * FROM student ORDER BY email ASC";
	$result = mysqli_query($connection, $sql);

	$serial = 1;

	while ($row = mysqli_fetch_assoc($result)){

		fputcsv($output, array($serial, $row['name'], $row['email'], $row['contact']));
		$serial++;
	}

	fclose($output);

?>