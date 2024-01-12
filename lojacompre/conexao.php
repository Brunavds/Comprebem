<?php
    $Servidor = 'localhost';
    $Usuario = 'root';
    $Senha = '';
    $BD = 'banco2';
    $cn = new PDO("mysql:host=$Servidor; dbname=$BD", $Usuario, $Senha);
?>