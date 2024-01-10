<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <title>Comprebem</title>
    <meta name="Author" content="Grupo Senac">
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
	include 'conexao.php';	
	include 'nav.php';
	include 'cabecalho.html'; 

	$nota = $ticket;
	?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4 text-center">
				<h2>Compra efetuada com sucesso, <?php echo $fomp;?>, seu pedido será entregue em até 10 dias úteis!!<br><br> Seu número de registro é: <b><?php echo $ticket; ?></b></h2>							
			</div>
		</div>
	</div>
	 

	<!-- Utilizado as funções "notafiscal.php?id_nota= echo $nota;" para gerar apenas as compra no arquivo em pdf 
	 foi chamado a variavel -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4 text-center">
			<h2>Clique para gerar sua nota</h2>
			<a href="notafiscal.php?id_nota=<?php echo $nota; ?>"><button class="btn btn-lg btn-success">Gerar Nota</button></a>
			</div>
		
		</div>
	</div>

	<br>
	<?php include 'rodape.html' ?>
</body>
</html>