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

	<style>
        /* Estilos para centralizar e estilizar o popup */
        #popup-container {
            display: none;
            color: #000000;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #FFD700;
            padding: 20px;
            text-align: center;
            border: 2px solid #000000;
            border-radius: 25px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        #popup-image {
            max-width: 100%;
            max-height: 200px; /* Defina a altura máxima desejada para a imagem */
        }

		#close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
		}	
    </style>

	<script>
		// Função para fechar o popup
        function fecharPopup() {
            var popup = document.getElementById('popup-container');
            popup.style.display = 'none';
        }
        // Função para exibir o popup ao carregar a página
        window.onload = function() {
            // Seleciona o elemento do popup
            var popup = document.getElementById('popup-container');

            // Exibe o popup
            popup.style.display = 'block';
        };
    </script>

</head>
<body>
    <?php 
	session_start();
	include 'conexao.php';
	include 'nav.php';
    include 'cabecalho.html';
	$Consulta = $cn->query('SELECT * FROM vw_produto'); //aqui vai o nome da tabela que armazena os produtos.
	?>

    <div class="container-fluid text-center">
			<div class="row">
				<?php
					while($Exibir = $Consulta -> fetch(PDO::FETCH_ASSOC)) // PDO é uma outra forma de fazer conexão com banco de dados.
					{ ?>
						<div class="col-sm-3">
							<img src="Produtos/<?php echo $Exibir['ds_img']; ?>" class="img-responsive" style="width:100%">
							<div><h4><b><?php echo mb_strimwidth($Exibir['nm_nome'],0,17,'...'); ?></b></h4></div>
							<div><h5>R$ <?php echo number_format($Exibir['vl_produto'],2,',','.'); ?></h5></div>
							<div class="text-center" style="margin-top:7px;">
								<?php 
									if($Exibir['qtd_estoque'] > 0) { ?>
									<a href="carrinho.php?id=<?php echo $Exibir['id_produto'] ?>" style="text-decoration:none;">
									<button class="btn btn-block btn-default" style="background:#fdeb00; color:black;">
										<span class="glyphicon glyphicon-usd"></span> Comprar
									</button>
									</a>
								<?php } 
								else { ?>
									<button class="btn btn-block btn-danger" disabled>
										<span class="glyphicon glyphicon-exclamation-sign"></span> Fora de Estoque
									</button>
									<?php } ?>
									<br>
									<a href="detalhes.php?id=<?php echo $Exibir['id_produto'] ?>" style="text-decoration:none;">
									<button class="btn btn-block btn-primary">
										<span class="glyphicon glyphicon-info-sign"></span> Detalhes
									</button>
									</a>
							</div>
						</div>
					<?php } ?>
			</div><!-- fechamento da class="row" -->
	</div><!-- fechamento da class="container-fluid" -->
	<br>
	<br>
    <?php include 'rodape.html' ?> 


		<!-- Elemento de popup -->
		<div id="popup-container">
		<span id="close-button" onclick="fecharPopup()">X</span>
        <h2>
			Bem-vindo à nossa página!
			Venha nos visitar na loja fisica!
		</h2>
        <img id="popup-image" src="../lojacompre/Logos/localização.png" alt="Imagem de boas-vindas">

		<h2> Av. Ademar de Barros, 1882, Guarujá </h2>
    </div>
</body>
</html>