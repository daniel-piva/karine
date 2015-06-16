<?php include 'valid.php'; ?>
<!DOCTYPE HTML>
<html lang="pt-br">
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="Resource-type" content="document"/>
  	<title>Example</title>
  </head>
  <body>
    <p>Acesso Permitido, Bem Vindo <strong><?php echo $kr_first_name." ".$kr_last_name; ?></strong></p> 
    <p><strong>Nome:</strong> <?php echo $kr_first_name; ?></p>
    <p><strong>Sobrenome:</strong> <?php echo $kr_last_name; ?></p>
    <p><strong>Usuário:</strong> <?php echo $kr_user; ?></p>
    <p><strong>Idade:</strong> <?php echo $kr_age; ?></p>
    <p><strong>E-mail:</strong> <?php echo $kr_email; ?></p>
    <br><br>
    <a href="logoff.php">Sair</a>
  </body>
</html>
