<?php
include 'conexao.php';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['txtnome'];
    $sobrenome = $_POST['txtsobrenome'];
    $celular = $_POST['txtcelular'];
    $email = $_POST['txtemail'];
    $senha = $_POST['txtsenha']; 
    $endec = $_POST['txtendereco']; 
    $cidade = $_POST['txtcidade']; 
    $cep = $_POST['txtcep'];

    // Gera o hash da senha
    $hash = password_hash($senha, PASSWORD_DEFAULT);

    // Verifica se o e-mail já está cadastrado
    $consulta = $cn->prepare("SELECT desc_email FROM tbl_usuario WHERE desc_email = ?");
    $consulta->execute([$email]);

    if ($consulta->rowCount() == 1) {
        header('location: erro1.php');
    } else {
        // Insere o usuário no banco de dados
        $incluir = $cn->prepare("INSERT INTO tbl_usuario(nm_usuario, sbnm_usuario, cell_usuario, desc_email, desc_senha, desc_status, desc_endereco, desc_cidade, num_cep) VALUES (?, ?, ?, ?, ?, '0', ?, ?, ?)");
        $incluir->execute([$nome, $sobrenome, $celular, $email, $hash, $endec, $cidade, $cep]);
        header('location: ok.php');
    }
}
?>
