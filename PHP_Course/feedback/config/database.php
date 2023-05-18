<?php

$dsn = 'mysql:host=localhost;dbname=php_course'; //* Nome do HOST e nome da base de dados
$usernamedb = 'root'; //* Nome de utilizador da base de dados
$passworddb = ''; //* Password da base de dados

try {
    $conn = new PDO($dsn, $usernamedb, $passworddb); //* Cria uma nova conexão à base de dados
} catch (PDOException $e) { 
    die('Erro ao conectar-se à base de dados: ') . $e->getMessage();
} //* Caso haja um erro, mostra o erro e termina a conexão à base de dados
?>