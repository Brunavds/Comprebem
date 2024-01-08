

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
</head>
<body>
    <h2>Lista de Vendas</h2>
    <table class="table">
        <tr>
            <th>ID Venda</th>
            <th>ID Cliente</th>
            <th>ID Produto</th>
            <th>Quantidade</th>
            <th>Total</th>
            <th>Data</th>
            <th>Forma de Pagamento</th>
        </tr>
        <?php
        
        session_start();

        if(empty($_SESSION['Status']) || $_SESSION['Status'] != 1){
            header('location:index.php');
        }

        include 'conexao.php';	// incluindo arquivo de conexao
        include 'nav.php'; // incluindo arquivo barra de navegação
        include 'cabecalho.html'; // incluindo cabeçalho

        // Consulta para obter todas as vendas
        $sql = "SELECT * FROM tbl_vendas";
        $resultado = $cn->query($sql);
        // Exibir todas as vendas
        while ($venda = $resultado->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>{$venda['id_venda']}</td>"; 
            echo "<td>{$venda['id_cliente']}</td>"; 
            echo "<td>{$venda['id_produto']}</td>";
            echo "<td>{$venda['qtd_produto']}</td>";
            echo "<td>{$venda['vl_produto']}</td>";
            echo "<td>{$venda['data_venda']}</td>";
            echo "<td>{$venda['meio_pagamento']}</td>";
            echo "</tr>";
        }
       /*  os valores de venda deve ter o mesmo nome da tabela que esta chamando  */

        ?>
    </table>

    <a href="pdf.php" style="text-decoration:none;">			
    <button type="submit" class="btn btn-block btn-lg btn-primary"> Gerar Arquivo </button>
    </a>
</body>
</html>
