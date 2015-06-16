<?php include 'valid.php'; ?>
<!DOCTYPE HTML>
<html>
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="Resource-type" content="document"/>
  	<title>Example</title>
  </head>
  <body>
    <p>Permitted access, Welcome <strong><?php echo $kr_first_name." ".$kr_last_name; ?></strong></p> 
    <p><strong>Name:</strong> <?php echo $kr_first_name; ?></p>
    <p><strong>Last Name:</strong> <?php echo $kr_last_name; ?></p>
    <p><strong>User:</strong> <?php echo $kr_user; ?></p>
    <p><strong>Age:</strong> <?php echo $kr_age; ?></p>
    <p><strong>Email:</strong> <?php echo $kr_email; ?></p>
    <br>
    <a href="logoff.php">Get Out -></a>
  </body>
</html>
