<?php
    $Servidor = 'localhost';
    $Usuario = 'root';
    $Senha = '';
    $BD = 'banco_senac';
    $cn = new PDO("mysql:host=$Servidor; dbname=$BD", $Usuario, $Senha);
?>