<?php
	include "conect.php";
	
	$rec_user = $_POST['user'];
	$rec_user = addslashes($rec_user);
	$rec_user = mysql_escape_string($rec_user);
	$rec_user = htmlentities($rec_user);
	$rec_user = htmlspecialchars($rec_user);

	$rec_pass = $_POST['pass'];
	$rec_pass = addslashes($rec_pass);
	$rec_pass = mysql_escape_string($rec_pass);
	$rec_pass = htmlentities($rec_pass);
	$rec_pass = htmlspecialchars($rec_pass);
	$rec_pass = md5($rec_pass);


	if ($_POST['user']) {
		mysql_select_db($kr_bd, $kr_conexBD) or die("Could not connect to database.");

		$sql = "SELECT * FROM $kr_tb_user WHERE user = '$rec_user' AND pass = '$rec_pass' LIMIT 1";
		$query = mysql_query($sql);
		$result = mysql_fetch_assoc($query);
		$count = mysql_num_rows($query);

		if ($count == 0) {
			header("Location: ".$kr_pglogin."?mess=no_user");
		} else {
			$_SESSION['id'] = $result['id'];
			$_SESSION['user'] = $result['user'];
			$_SESSION['email'] = $result['email'];
			$_SESSION['first_name'] = $result['first_name'];
			$_SESSION['last_name'] = $result['last_name'];
			$_SESSION['age'] = $result['age'];

			header("Location: ".$kr_pgdesti);
		}

	}

?>

<!DOCTYPE HTML>
<html>
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  	<meta name="Resource-type" content="document"/>
  	<title>Login</title>
  </head>

  <body>

	<form method="post">
		<div><input type="text" name="user" autofocus="on" placeholder="User"></div>
		<div><input type="password" name="pass" placeholder="Password"></div>
		<div><button type="submit">Login</button></div>
	</form>
	<?php 
		// Error message display
		switch ($_GET['mess']) {
			case 'no_user':
				echo "<p style=\"color:red;\">Username and Password not found, try again</p>";
				break;

			default:
				echo "<p>Welcome User</p>";
				break;
		}
	?>

  </body>
</html>
