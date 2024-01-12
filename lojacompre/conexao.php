<?php
    $Servidor = 'localhost';
    $Usuario = 'root';
    $Senha = '';
    $BD = 'bd_comprebem_senac';
    $cn = new PDO("mysql:host=$Servidor; dbname=$BD", $Usuario, $Senha);
?>