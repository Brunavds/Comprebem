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
	?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4 text-center">
				<h1 style="font-size:2.3vw; color: #000; text-shadow: 1px 1px 0px #fdeb00; letter-spacing: 5px;">ÁREA ADMINISTRATIVA</h1>
                <br>
				<a href="formProduto.php" style="text-decoration:none;">			
				<button type="submit" class="btn btn-block btn-lg btn-primary"> Incluir Produto</button>
				</a>
                <br>
                <a href="lista.php" style="text-decoration:none;">
				<button type="submit" class="btn btn-block btn-lg btn-primary">	Alterar / Excluir Produto</button>
                </a>
                <br>
                <a href="vendas.php" style="text-decoration:none;">
				<button type="submit" class="btn btn-block btn-lg btn-primary"> Vendas</button>
                <br>
                <a href="clientesCadastro.php" style="text-decoration:none;">
				<button type="submit" class="btn btn-block btn-lg btn-primary"> Gerenciamento Clientes </button>
                <br>
                <a href="nvcategoria.php" style="text-decoration:none;">			
				<button type="submit" class="btn btn-block btn-lg btn-primary"> Adicionar Categoria</button>
				</a>
                <br>
                <a href="sair.php" style="text-decoration:none;">
				<button type="submit" class="btn btn-block btn-lg btn-danger"> Sair da àrea administrativa</button>
                </a>
			</div>
		</div>
	</div>
    <br>
    <br>

    <div style="display: flex; margin-right: 10px;">
        <div class="card" style=" border-radius: 15px;width: 18rem; padding: 2px;margin: 20px;box-sizing: border-box;background:#94dbff; display: flex;font-family: arial;">
        <div class="card-body">
            <h5 class="card-title">Fique atento!</h5>
            <h5 class="card-subtitle mb-2 text-body-secondary">Gestor,</h5>
            <p class="card-text">Fique atento ao prazo para renovação de termos de segurança, sua privacidade é muito importante!</p>
            <a href="#" class="card-link" style="color:red;">Termo de Privacidade</a>
            <a href="#" class="card-link" style="color:red;">Duvidas</a>
        </div>
        </div>

        <div class="card" style=" border-radius: 15px;width: 18rem; padding: 2px;margin: 20px;box-sizing: border-box;background:#94dbff; display: flex;font-family: arial;">
        <div class="card-body">
            <h5 class="card-title">Relatorios</h5>
            <p class="card-text">Duvidas sobre relatorios, prazos, solicitações e reclamaçoes entre em contato com nosso supoerte de seg á sex das 08h ás 17h.</p>
            <p style="color:red;"> (11)2396-7785 </p>
        </div>
        </div>

        <div class="card" style=" border-radius: 15px;width: 18rem; padding: 2px;margin: 20px;box-sizing: border-box;background:#94dbff; display: flex;font-family: arial;">
        <div class="card-body">
            <h5 class="card-title">Fique atento!</h5>
            <p class="card-text">O prazo para pagamento da hospedagem está próxima do vencimento, não deixe para depois. Evite filas realizando o pagemnto via pix.</p>
            <a href="#" class="card-link" style="color:red;">Fatura</a>
            <br>
            <a href="#" class="card-link" style="color:red;">Gerar Código pix</a>
        </div>
        </div>

        <div class="card" style=" border-radius: 15px;width: 18rem; padding: 2px;margin: 20px;box-sizing: border-box;background:#94dbff; display: flex;font-family: arial;">
        <div class="card-body">
            <h5 class="card-title">Fique atento!</h5>
            <h5 class="card-subtitle mb-2 text-body-secondary">Gestor,</h5>
            <p class="card-text">Fique atento ao prazo para renovação de termos de segurança, sua privacidade é muito importante!</p>
            <a href="#" class="card-link" style="color:red;">Termo de Privacidade</a>
            <a href="#" class="card-link" style="color:red;">Duvidas</a>
        </div>
        </div>
        
    
    </div>
    
    <br>
    <br>
	<?php include 'rodape.html' ?>
</body>
</html>