<?php

var_dump($_POST);

include_once ('../banco-_de_dados/database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $endereco = $_POST["endereco"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $password = $_POST["password"];

    $connection = connectDatabase();

    // Usar prepared statements para proteger contra SQL injection
    $name = mysqli_real_escape_string($connection, $name);
    $email = mysqli_real_escape_string($connection, $email);
    $cpf= mysqli_real_escape_string($connection, $cpf);
    $endereco= mysqli_real_escape_string($connection, $endereco);
    $bairro= mysqli_real_escape_string($connection, $bairro);
    $cidade= mysqli_real_escape_string($connection, $cidade);
    $estado= mysqli_real_escape_string($connection, $estado);
    $password= mysqli_real_escape_string($connection, $password);


    $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (name, email, password, level) VALUES ('$name', '$email', '$password_hashed', 'common')";

    if(mysqli_query($connection, $query)) {
        // Configurar a sessão
        session_start();

        // Armazenar o ID do usuário na sessão
        $_SESSION['user_id'] = mysqli_insert_id($connection);

        // Outras informações que você pode querer armazenar na sessão
        $_SESSION['user_name'] = $name;
        $_SESSION['user_email'] = $email;
        $_SESSION['user_password'] = $password;

        // Redirecionar para admin/index.php
        header("Location: ../Loja CompreBem/index.php");
        exit(); // Certifique-se de sair após o redirecionamento
    } else {
        // Em caso de erro, redirecione para uma página de erro ou forneça uma mensagem amigável
        header("Location: 404.php");
        exit();
    }

    mysqli_close($connection);
}

?>
