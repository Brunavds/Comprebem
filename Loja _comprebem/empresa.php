<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Empresa</title>
</head>
<body>
    <!--INICIO CONTAINER-->
    <div class="container">

        <!--INICIO NAVEGAÇÃO TOPO-->
        <div class="navbar">

        
            <div class="logo">
                <a href="index.php"><img src="assets/img/logo compre.png" alt="Loja CompreBem" width="125px"></a>
            </div>

            <!--INICIO MENU NAVEGAÇÃO-->
            <nav>
                <ul id="MenuItens">
                    <li><a href="index.php" title="">Início</a></li>
                    <li><a href="produtos.php" title="">Produtos</a></li>
                    <li><a href="empresa.php" title="">Empresa</a></li>
                    <li><a href="contato.php" title="">Contatos</a></li>
                    <li><a href="login.php" title="">Minha Conta</a>
                        <?php
                            // Verificar se o usuário está logado
                            if (isset($_SESSION['user_name'])) {
                                echo '<span id="user-name">' . $_SESSION['user_name'] . '</span>';
                            } else {
                                // Redirecionar ou exibir opções de login, se necessário
                            }
                        ?>
                    </li>

                </li>
                </ul>
            </nav>
            <!--FIM MENU NAVEGAÇÃO-->

            
            <div>
                <a href="sacola.php"> <img src="assets/img/260.png" alt="" width="30px" height="30px"> </a>
            </div>
        
            <img src="assets/img/menu.png" alt="" class="menu-celular" onclick="menucelular()">

        </div>
        <!--FIM NAVEGAÇÃO TOPO-->



        <div class="carde" style="width: 18rem;">
  <img src="assets/img/fachada.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Lugar aonde moda e acessibilidade se encontram. As melhores marcas em um só lugar!</p>
  </div>
</div>


<div class="carde" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Bem mais que uma loja de roupas, seu lar!</div>


<div class="carde" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Atendimento, qualidade, inovação e modernidades são alguns de nossos diferencias .</p>
  </div>
</div>





      

</body>
</html>