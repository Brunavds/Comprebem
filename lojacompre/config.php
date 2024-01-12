<?php 

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'bd_comprebem2');

// Criando a conexão com o banco de dados
$conn = new mysqli(HOST, USER, PASS, BASE);

// Verificando a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

?>