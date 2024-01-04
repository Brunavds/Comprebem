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
    <h2>Clientes Cadastrados</h2>
    <table class="table">
        <tr>
            <th>N° Usuario</th>
            <th>Nome </th>
            <th>Sobrenome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Numero</th>
            <th>Endereço</th>
            <th>Cidade</th>
            <th>CEP</th>
        </tr>
        <?php
        session_start();

        if (empty($_SESSION['Status']) || $_SESSION['Status'] != 1){
            header('location:index.php');
        }

        include 'conexao.php';	// incluindo arquivo de conexao
        include 'nav.php'; // incluindo arquivo barra de navegação
        include 'cabecalho.html'; // incluindo cabeçalho

        // Consulta para obter todos os usuários
        $sql = "SELECT * FROM tbl_usuario";
        $resultado = $cn->query($sql);

        // Exibir todos os usuários
        while ($user = $resultado->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>{$user['id_usuario']}</td>"; 
            echo "<td>{$user['nm_usuario']}</td>"; 
            echo "<td>{$user['sbnm_usuario']}</td>";
            echo "<td>{$user['cell_usuario']}</td>";
            echo "<td>{$user['desc_email']}</td>";
            echo "<td>{$user['desc_status']}</td>";
            echo "<td>{$user['desc_endereco']}</td>";
            echo "<td>{$user['desc_cidade']}</td>";
            echo "<td>{$user['num_cep']}</td>";
            echo "</tr>";
        }           

        ?>
    </table>

    <a href="pdfCliente.php" style="text-decoration:none;">			
    <button type="submit" class="btn btn-block btn-lg btn-primary"> Gerar Arquivo </button>
    </a>
</body>
</html>
