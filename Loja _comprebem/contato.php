<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fl.css">
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

         <div class="mb1">
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
                <img class="img"src="assets/img/agente.jpg" alt="agente">
            </div>


            
        
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