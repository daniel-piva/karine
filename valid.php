<?php
	include 'conect.php';

	if (empty($_SESSION['user'])) {
	  	header("Location: ".$kr_pglogin);
	 } else {
	 	$kr_log = "y";
		$kr_id = $_SESSION['id'];
		$kr_user = $_SESSION['user'];
		$kr_email = $_SESSION['email'];
		$kr_age = $_SESSION['age'];
		$kr_first_name = $_SESSION['first_name'];
		$kr_last_name = $_SESSION['last_name'];
	 }
