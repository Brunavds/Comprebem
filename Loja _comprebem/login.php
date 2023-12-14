<!-- fazer um se para encaminhar o clinete para pagina principal -->

<?php
session_start();

if(isset($_SESSION['user_id'])){
    header('Location: ../index.php');
    exit();
} else {
    // Se o usuário não estiver autenticado, permaneça na página de login
    // ou redirecione para o login seção caso haja uma página específica para isso.
    // header('Location: ../login.php');
    // exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Login</title>
</head>
<body>

    <div class="container">
        <img src="assets/img/logo compre.png" alt="Fundo login">

        <div class="login">

            <form action="requests/request_cadastro.php" method="POST">
                <div class="form">
                    <label for="email">Digite seu e-mail</label>
                    <input type="email" name="email" id="email">
                    <br>
                    <label for="password">Digite sua senha</label>
                    <input type="password" name="password">
                </div> 
                
                <button type="submit" class="button">Entrar</button>
            </form>

            <a href="cadastro.php"><button type="button" class="button">Cadastre-se</button></a>
        </div>

    </div>
</body>
</html>
