<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <title>Comprebrem</title>
    <meta name="Author" content="Grupo Senac">
    <link rel="icon" href="./Logos/Logotipo Escuro.png">
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="estilo.css">

	<style> /* Função para mostrar opções de parcelamento  */
		#parcelamento {
			display: none;
		}
	</style> 

	<script>
		function mostrarParcelamento (){
			let metodoPagamento = document.getElementById("metodoPagamento");
			let parcelamento = document.getElementById ("parcelamento");

			if(metodoPagamento.value === "credito"){
				parcelamento.style.display = "block";
			}else{
				parcelamento.style.display = "none";
			}
		}
	</script>
</head>
<body>	
	
	<?php

use Dompdf\Options;

	session_start(); // iniciando sessão
	// verificando se usuário está logado
	if(empty($_SESSION['ID'])){
		header('location:formlogin.php'); // enviando para formlogon.php
	}
	include 'conexao.php';	// incluindo arquivo de conexao
	include 'nav.php'; // incluindo arquivo barra de navegação
	include 'cabecalho.html'; // incluindo cabeçalho
	
	// verificando se o codigo do produto NÃO está vazio
	if (!empty($_GET['id'])) {
	
	// inserindo o código do produto na variável $cd_prod
	$cd_prod=$_GET['id'];
	
	// se a sessão carrinho não estiver preenchida(setada)
	if (!isset($_SESSION['carrinho'])) {
		  // será criado uma sessão chamado carrinho para receber um vetor
		  $_SESSION['carrinho'] = array();
	}
	// se a variavel $cd_prod não estiver setado(preenchida)
	if (!isset($_SESSION['carrinho'][$cd_prod])) {
		
		// será adicionado um produto ao carrinho
		$_SESSION['carrinho'][$cd_prod]=1;
	}
	
	// caso contrario, se ela estiver setada, adicione novos produtos
	else {
		  $_SESSION['carrinho'][$cd_prod]+=1;
	}
		// incluindo o arquivo 'mostraCarrinho.php'
		include 'mostraCarrinho.php';
	} else {
		
		//mostrando o carrinho	vazio	
		include 'mostraCarrinho.php';
	}	
	?> 


	<!-- selecionar Forma de pagamento -->
<div class="row text-center" style="margin-top: 15px;"> 
    <h3>Selecione a forma de pagamento:</h3>
    <select name="pagamento" id="metodoPagamento" onchange="mostrarParcelamento()" class="btn btn-lg btn-primary">
        <option value="boleto">Boleto</option>
        <option value="pix">Pix</option>
        <option value="debito">Cartão de Débito</option>
        <option value="credito">Cartão de Crédito</option>
        <option value="picpay">PicPay</option>
    </select>
	
        <!-- Mostrar opções de parcelamento apenas se a forma de pagamento for crédito -->
        <div id= "parcelamento">
			<select name="parcela" id="numeroParcelas" class="btn btn-lg btn-primary">
            <option value="1">À Vista</option>
            <option value="2">2x Sem Juros</option>
            <option value="3">3x Sem Juros</option>
            <option value="4">4x Sem Juros</option>
            <option value="5">5x Sem Juros</option>
            <option value="10">10x Sem Juros</option>
            <option value="20">20x Sem Juros</option>
            <option value="30">30x Sem Juros</option>
            <option value="40">40x Sem Juros</option>
            <option value="50">50x Sem Juros</option>
        	</select>
		</div>
    
</div>


	<!-- exibindo o valor da variavel total da compra -->
	<div class="row text-center" style="margin-top: 15px;">
		<h1><b>Total: R$ <?php echo number_format($total,2,',','.'); ?></b></h1>
	</div>
	<div class="row text-center" style="margin-top: 15px;">
		<a href="index.php"><button class="btn btn-lg btn-primary">Continuar Comprando</button></a>

        <?php if(count($_SESSION['carrinho']) > 0) { ?>
		<a href="finalizarCompra.php"><button class="btn btn-lg btn-success">Finalizar Compra</button></a>
        <?php } ?>
	</div>
</div>
    <br>
	<?php
	include 'rodape.html';
	?>
</body>
</html>