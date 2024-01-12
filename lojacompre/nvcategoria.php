<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <title>Comprebem</title>
    <meta name="Author" content="Grupo senac">
    <link rel="icon" href="./Logos/Logotipo Escuro.png">
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
<?php
	session_start();

    if(empty($_SESSION['Status']) || $_SESSION['Status'] != 1){
        header('location:index.php');
    }
	include 'conexao.php';	
	include 'nav.php';
	include 'cabecalho.html';

    $consultaCategoria = $cn-> query("select * from tbl_categoria");

	?>








<?php include 'rodape.html' ?>
</body>
</html>