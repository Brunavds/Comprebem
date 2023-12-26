<?php
session_start();

include_once('../banco_de_dados/database.php');

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
    $query = "INSERT INTO users (name, email, cpf, endereco, bairro, cidade, estado, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($connection, $query);

    mysqli_stmt_bind_param($stmt, "ssssssss", $name, $email, $cpf, $endereco, $bairro, $cidade, $estado, $password_hashed);

    $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    if (mysqli_stmt_execute($stmt)) {
        // Configurar a sessão
        session_start();

        // Armazenar o ID do usuário na sessão
        $_SESSION['user_id'] = mysqli_insert_id($connection);

        // Outras informações que você pode querer armazenar na sessão
        $_SESSION['user_name'] = $name;
        $_SESSION['user_email'] = $email;

        // Redirecionar para admin/index.php
        header("Location: ../Loja_Comprebem/index.php");
        mysqli_stmt_close($stmt);
        mysqli_close($connection);
        // Certifique-se de sair após o redirecionamento
    } else {
        // Em caso de erro, redirecione para uma página de erro ou forneça uma mensagem amigável
        header("Location: 404.php");
        mysqli_stmt_close($stmt);
        mysqli_close($connection);
    }
}
?>
