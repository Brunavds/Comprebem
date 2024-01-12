<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprebem</title>
    <meta name="Author" content="Grupo Senac">
    <link rel="icon" href="./Logos/Logotipo Escuro.png">
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="fl.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
<?php 
	session_start();
	include 'conexao.php';
	include 'nav.php';
    include 'cabecalho.html';
?>
	<div >
	

		<h1 class= "text">Fale Conosco</h1> 
	

		<div class="cont">
		<p>Se você tem duvidas ou suguestões entra em contato conosco através de :</p> 
		<h4 class = "text1">Email: loja_comprebem@gmail.com</h4>
		<h4 class = "text1">WhatsApp: (21) 3352-7125 </h4>
		
		
		<p class="p">Siganos também nas redes sociais</p>

		<h4 class = "text1">Instagran: @Comprebem </h4>
		<h4 class = "text1"> Facebook: CompreBem </h4>
		</div>

		<div>
			<img class="img"src="Produtos/agente.jpg" alt="agente">
		</div>
	</div> 


				
	<br>
	<br>
    <?php include 'rodape.html' ?>
</body>
</html>