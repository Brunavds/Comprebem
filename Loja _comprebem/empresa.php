<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/empresa.css">
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


<div>
    <h2>Lugar aonde moda e acessibilidade se encontram. As melhores marcas em um só lugar!</h2>
    <h4> Pensando em trazer o melhor para a baixada, os fundadores da compre bem se dedicam desde 2003 em sempre trazer produtos de qualidade 
        que cabem no bolso de todos. A meta é agradar nossos clientes de todos os gostos
    </h4>
</div> 

 <img class = "img1" src="assets/img/reuniao.webp" alt="" srcset="reuniao" width="500px" height="500px">

<div>
    <h2>Bem mais que uma loja de roupas, seu lar!</h2>
    <h4>Ambientes climatizados trazem um conforto para nosso clientes que são parte da familia.</h4>
</div>

 <img class = "img2" src="assets/img/agente.png" alt="" srcset="reuniao" width="500px" height="500px">

<div>
    <h2> Atendimento, qualidade, inovação e modernidades são alguns de nossos diferencias.</h2>
    <h4>Foco no atendimento diferenciado e humanitario, inovação e modernidade em nossas peças para trazer conforto e beleza.
        Sempre atento aos pedidos dos nossos clientes.
    </h4>
</div>




 <!--INCIO RODAPÉ-->
 <footer class="rodape">

<div class="container">
    <div class="linha">

        <div class="rodape-col-1">
        <h3>Baixe o nosso app</h3>
        <p>Baixe nosso app para Android e IOS</p>
        <div class="app-logo">
            <img src="assets/img/google.png" alt="">
            <img src="assets/img/apple.png" alt="">
        </div>
        </div>

        <div class="rodape-col-2">
            <img src="assets/img/logo compre.png" alt="">
            <p>Loja CompreBem © 2023. Todos os direitos reservados.</p>
        </div>

        <div class="rodape-col-3">
            <h3>Mais Informações</h3>
            <ul>
                <li>Cupons</li>
                <li>Blog</li>
                <li>Política de Privacidade</li>
                <li>Contatos</li>
            </ul>
        </div>

        <div class="rodape-col-4">
            <h3>Redes Sociais</h3>
            <ul>
                <li>Facebook <ion-icon name="logo-facebook"></ion-icon></li>
                <li>Twitter <ion-icon name="logo-twitter"></ion-icon></li>
                <li>Instagram <ion-icon name="logo-instagram"></ion-icon></li>
                <li>Youtube <ion-icon name="logo-youtube"></ion-icon></li>
            </ul>
            </div>

    </div>
    <hr>
    <p class="direitos">
        &#169; Todos os direitos reservados a Loja CompreBem.</p>
    </p>    
</div>

</footer>
<!--FIM RODAPÉ-->


<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="assets/js/app.js"></script>
      
      

</body>
</html>