<?php
	session_start();

	// Database
	$kr_serv = 'localhost'; // Serv MySQL 
	$kr_user = 'root'; // User MySQL
	$kr_pass = 'root'; // Password MySQL
	$kr_bd = 'karine'; // Database

	// Table user Database
	$kr_tb_user = 'user';

	// System Information
	$kr_pglogin = "login.php"; // Page to Login
	$kr_pgdesti = "index.php"; // Protected Page

	// Connection
	$kr_conexBD = mysql_connect($kr_serv, $kr_user, $kr_pass) or die("Could not connect to the server.");
	mysql_set_charset('utf8',$kr_conexBD);
