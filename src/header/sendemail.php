<?php

	include '../connect/connect.php';
	require_once '../PHPMailer/PHPMailerAutoload.php';

	$email = $_POST['email'];

	$m = new PHPMailer;

	$m->isSMTP();
	$m->SMTPAuth = true;

	$m->Host = 'smtp.gmail.com';
	$m->Username = 'course_management_system@gmail.com';
	$m->Password = 'cms12345';
	$m->SMTPSecure = 'ssl';
	$m->Port = 465;

	$m->From = 'course_management_system@gmail.com';
	$m->FromName = 'System Admin';

	$m->addReplyTo('course_management_system@gmail.com','System Admin');
	$m->addAddress($email,'');

	$m->Subject = 'Forgotten Password';
	$m->Body = 'This is a test email.';
	$m->AltBody = 'This is a test email.';

	if($m->send()){
		echo "Email Send";
	}
	else{
		echo $m->ErrorInfo;
	}


?>