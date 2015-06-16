<?php
	include "conect.php";

	if ($_POST['user']) {
		mysql_select_db($kr_bd, $kr_conexBD) or die("Could not connect to database.");

		$rec_user = $_POST['user'];
		$rec_user = addslashes($rec_user);
		$rec_user = mysql_escape_string($rec_user);

		$rec_email = $_POST['email'];
		$rec_email = addslashes($rec_email);
		$rec_email = mysql_escape_string($rec_email);

		$rec_pass = $_POST['pass'];
		$rec_pass = addslashes($rec_pass);
		$rec_pass = mysql_escape_string($rec_pass);
		$rec_pass = md5($rec_pass);

		$rec_age = $_POST['age'];
		$rec_age = addslashes($rec_age);
		$rec_age = mysql_escape_string($rec_age);

		$rec_first_name = $_POST['first_name'];
		$rec_first_name = addslashes($rec_first_name);
		$rec_first_name = mysql_escape_string($rec_first_name);

		$rec_last_name = $_POST['last_name'];
		$rec_last_name = addslashes($rec_last_name);
		$rec_last_name = mysql_escape_string($rec_last_name);

		$insert = "INSERT INTO $kr_tb_user (id, user, email, pass, age, first_name, last_name) VALUES (NULL, '$rec_user', '$rec_email', '$rec_pass', '$rec_age', '$rec_first_name', '$rec_last_name')";
		
		if (mysql_query($insert)) {
			echo "<script>alert('User successfully registered!')</script>";
		} else {
			echo "<script>alert('an error has occured, try again!')</script>";
		}
		mysql_close($kr_conexBD);
	}
?>

<!DOCTYPE html>
<html>
	<head>
	  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	  	<meta name="Resource-type" content="document"/>
		<title>New User</title>
	</head>
	<body>
		<h1>New User</h1>
		<form method="post">
			<div><input type="text" name="user" autofocus="on" placeholder="Username" style="width:40%;"></div>
			<div><input type="text" name="pass" placeholder="Password" style="width:40%;"></div>
			<div><input type="text" name="email" placeholder="Email" style="width:40%;"></div>
			<div><input type="text" name="age" placeholder="Age" style="width:40%;"></div>
			<div><input type="text" name="first_name" placeholder="First Name" style="width:40%;"></div>
			<div><input type="text" name="last_name" placeholder="Last Name" style="width:40%;"></div>
			<div><button type="submit">Save</button>
		</form>
		<p>After registration, please <a href="login.php">Login</a></p>
	</body>
</html>
