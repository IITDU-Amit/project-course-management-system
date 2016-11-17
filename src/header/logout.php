<?php 
	
	session_start();

	include '../connect/connect.php';

	if(session_status()!=NULL){
		session_destroy();
		echo "Logged out";
	}

 ?>