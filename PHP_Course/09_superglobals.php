<?php 
/*
  ! $GLOBALS - Uma variável superglobal que contém informações sobre quaisquer variáveis ​​no global scope.
  ! $_FILES - Contém informações sobre arquivos carregados no script.
  ! $_SESSION - Contém informações sobre variáveis ​​passadas por uma sessão.
  ! $_SERVER - Contém informações sobre o ambiente do servidor.
  ! $_ENV - Contém informações sobre as variáveis ​​de ambiente.
  * $_GET - Contém informações sobre variáveis ​​passadas por uma URL ou formulário.
  * $_POST - Contém informações sobre variáveis ​​passadas por um formulário.
  * $_REQUEST - Contém informações sobre variáveis ​​passadas pelo formulário ou URL.
  ? $_COOKIE - Contém informações sobre variáveis ​​passadas por um cookie.
*/

// var_dump($GLOBALS);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SuperGlobals</title>
</head>
<body>
  <ul>
    <li>Host: <?php echo $_SERVER['HTTP_HOST']; ?></li> <!-- Nome do host -->
    <li>Document Root: <?php echo $_SERVER['DOCUMENT_ROOT']; ?></li> <!-- Diretório raiz da página -->
    <li>System Root: <?php echo $_SERVER['SystemRoot']; ?></li> <!-- Diretório raiz do sistema -->
    <li>Server Name: <?php echo $_SERVER['SERVER_NAME']; ?></li> <!-- Nome do servidor -->
    <li>Server Port: <?php echo $_SERVER['SERVER_PORT']; ?></li> <!-- Porta do servidor -->
    <li>Current File Dir: <?php echo $_SERVER['PHP_SELF']; ?></li> <!-- Diretório do arquivo atual -->
    <li>Request URI: <?php echo $_SERVER['REQUEST_URI']; ?></li> <!-- URI da requisição -->
    <li>Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li> <!-- Software do servidor -->
    <li>Client Info: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li> <!-- Informações do cliente -->
    <li>Remote Address: <?php echo $_SERVER['REMOTE_ADDR']; ?></li> <!-- Endereço remoto -->
    <li>Remote Port: <?php echo $_SERVER['REMOTE_PORT']; ?></li> <!-- Porta remota -->
  </ul>
</body>
</html>