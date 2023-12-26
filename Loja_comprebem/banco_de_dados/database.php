<?php

function connectDatabase(){
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'compre_bem';

    $connection = mysqli_connect($server, $user, $password, $database);

    if(!$connection){
        die('Conexão falhou:' . mysqli_connect_error());
    }

    return $connection;
}

// Exemplo de uso:
$connection = connectDatabase();

// Agora você tem a conexão e pode usá-la conforme necessário

// Não se esqueça de fechar a conexão quando não precisar mais dela
mysqli_close($connection);

?>
