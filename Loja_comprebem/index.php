<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja CompreBem</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
    <!--INICIO BANNER-->
    <div class="banner">

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

         <!--INICIO TEXTO BANNER-->
         <div class="linha">

            <div class="col-2">
                <h1>Seu guarda-roupas<br>nunca mais será o mesmo.</h1>
                <p>As roupas que você sempre quis, por preços que você nunca tinha visto.</p>
                <br><a href="" class="btn">Mais Informações &#8594;</a>
            </div>
            <div class="col-2">
             <img src="assets/img/banner-1.png" alt="">    
            </div>

        </div>
         <!--FIM TEXTO BANNER-->

        </div>
        <!--FIM CONTAINER-->
    </div>
     <!--FIM BANNER-->

     <!--INICIO CATEGORIAS-->
        <div class="categorias">

            <!--INICIO CATEGORIAS EM DESTAQUE-->

            <div class="corpo-categorias">

                <!--INICIO LINHA DO CORPO CATEGORIAS-->
                <div class="linha">

                    <div class="col-3">
                        <a href="feminino.php" title="">
                        <img src="assets/img/modelo1.jpg" alt="">
                        </a>
                        <h3 class="cat">Feminino</h3>
                </div>
                    <div class="col-3">
                        <img src="assets/img/modelo2.jpg" alt="">
                        <h3 class="cat">Masculino</h3>
                </div>
                    <div class="col-3">
                        <img src="assets/img/modelo3.jpg" alt="">
                        <h3 class="cat">Infantil</h3>
                </div>

                <!--FIM LINHA DO CORPO CATEGORIAS-->

            </div>
            <!--FIM CORPO CATEGORIAS EM DESTAQUE-->

        </div>
     <!--FIM CATEGORIAS EM DESTAQUE-->

     <!--INICIO PRODUTOS EM DESTAQUE-->
     <div class="corpo-categorias">
        <h2 class="titulo">Produtos em Destaque</h2>

        <!--INICIO LINHA DO CORPO CATEGORIAS EM DESTAQUE-->
        <div class="linha">

            <!--INICIO ITEM PRODUTOS EM DESTAQUE-->
            <div class="col-4">
                <a href="ver-produto.php" title="">
                <img src="assets/img/fla1.avif" alt="">
                </a>
                <h4>Camisa do Flamengo II 23 Masculina adidas</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>R$ 319,90</p>
            </div>
            <!--FIM ITEM PRODUTOS EM DESTAQUE-->
            <!--INICIO ITEM PRODUTOS EM DESTAQUE-->
            <div class="col-4">
                <a href="ver-produto2.php" title="">
                <img src="assets/img/botafogo.webp" alt="">
                </a>
                <h4>Camisa Botafogo Retrô 1942 Multicores</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                </div>
                <p>R$ 139,90</p>
            </div>
            <!--FIM ITEM PRODUTOS EM DESTAQUE-->
            <!--INICIO ITEM PRODUTOS EM DESTAQUE-->
            <div class="col-4">
                
                <img src="assets/img/vasco.webp" alt="">
                
                <h4>Camisa Kappa Vasco II 2023</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-half"></ion-icon>
                </div>
                <p>R$ 299,90</p>
            </div>
            <!--FIM ITEM PRODUTOS EM DESTAQUE-->
            <!--INICIO ITEM PRODUTOS EM DESTAQUE-->
            <div class="col-4">
                <a href="ver-produto.php" title="">
                <img src="assets/img/fluminense.avif" alt="">
                </a>
                <h4>Camisa do Fluminense I 23 Masculina Umbro</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                </div>
                <p>R$ 349,90</p>
            </div>
            <!--FIM ITEM PRODUTOS EM DESTAQUE-->
        </div>
        <!--FIM LINHA DO CORPO CATEGORIAS EM DESTAQUE-->

        <h2 class="titulo">Novidades</h2>

        <!--INICIO LINHA DO CORPO CATEGORIAS NOVIDADES EM DESTAQUE-->
        <div class="linha">

            <!--INICIO ITEM NOVIDADES EM DESTAQUE-->
            <div class="col-4">
                
                <img src="assets/img/produto-11.jpg" alt="">
                
                <h4>Tênis Delicate 4, Feminino</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>R$ 199,90</p>
            </div>
            <!--FIM ITEM NOVIDADES EM DESTAQUE-->
            <!--INICIO ITEM NOVIDADES EM DESTAQUE-->
            <div class="col-4">
                
                <img src="assets/img/produto-8.jpg" alt="">
                
                <h4>Camiseta Feminina Dry Fit Proteção UV 30+</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                </div>
                <p>R$ 39,90</p>
            </div>
            <!--FIM ITEM NOVIDADES EM DESTAQUE-->

            <!--INICIO ITEM NOVIDADES EM DESTAQUE-->
            <div class="col-4">
                <img src="assets/img/produto-4.jpg" alt="">
                <h4>Blusa Soltinha com Estampa de Flores</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-half"></ion-icon>
                </div>
                <p>R$ 19,90</p>
            </div>
            <!--FIM NOVIDADES-->
            <!--INICIO ITEM NOVIDADES EM DESTAQUE-->
            <div class="col-4">
                <img src="assets/img/produto-12.jpg" alt="">
                <h4>Legging 4 Estações Suplex Básica Fitness Academia</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                </div>
                <p>R$ 34,99</p>
            </div>
            <!--FIM ITEM NOVIDADES EM DESTAQUE-->
        </div>
        <!--FIM LINHA DO CORPO NOVIDADES EM DESTAQUE-->


     </div>
     <!--FIM PRODUTOS EM DESTAQUE-->

     <!--INICIO OFERTAS-->
     <div class="ofertas">
        <div class="corpo-categorias">
            <div class="linha">
                <div class="col-2">
                    <img src="assets/img/banner-2.png" alt="" class="oferta-img">
                </div>
                <div class="col-2">
                    <p>Produto exclusivo da Loja CompreBem</p>
                    <h1>Vestido Christina</h1>
                    <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eaque perferendis earum quis distinctio! Consequatur sapiente, repudiandae, ipsam debitis recusandae nemo expedita voluptatum aliquam placeat molestiae aut provident natus alias?</small>
                    <br> <br> <a href="" class="btn">Compre Agora &#8594;</a>
                </div>
            </div>
        </div>

     </div>
     <!--FIM OFERTAS-->

     <!--INICIO DEPOIMENTOS-->

     <div class="depoimentos">
        <div class="corpo-categorias">
            <div class="linha">
        
                <!--INICIO ITEM DEPOIMENTOS-->
                <div class="col-3">
                    <ion-icon name="ribbon" class="depoimento-icone"></ion-icon>
                    <p>“Ser empático é ver o mundo com os olhos do outro e não ver o nosso mundo refletido nos olhos dele.”</p>
                    
                    <div class="classificacao">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star-half"></ion-icon>
                    </div>

                    <img src="assets/img/cliente-1.png" alt="">
                    <h3>Danny Kim</h3>
                </div>
                <!-- FIM ITEM DEPOIMENTOS-->

                <!--INICIO ITEM DEPOIMENTOS-->
                <div class="col-3">
                    <ion-icon name="ribbon" class="depoimento-icone"></ion-icon>
                    <p>“O talento vence jogos, mas só o trabalho em equipe ganha campeonatos.”</p>
                    
                    <div class="classificacao">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star-half"></ion-icon>
                    </div>

                    <img src="assets/img/cliente-2.png" alt="">
                    <h3>Jordan Smith</h3>
                </div>
                <!-- FIM ITEM DEPOIMENTOS-->

                <!--INICIO ITEM DEPOIMENTOS-->
                <div class="col-3">
                    <ion-icon name="ribbon" class="depoimento-icone"></ion-icon>
                    <p>“A produtividade do trabalho não é responsabilidade do trabalhador, mas do gestor.”</p>
                    
                    <div class="classificacao">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star-half"></ion-icon>
                    </div>

                    <img src="assets/img/cliente-3.png" alt="">
                    <h3>Karen De Oliveira</h3>
                </div>
                <!-- FIM ITEM DEPOIMENTOS-->
                
            </div>
        </div>
     </div>
     <!--FIM DEPOIMENTOS-->


     <!--INICIO MARCAS-->

        <div class="marcas">
            <div class="corpo-categorias">
                <div class="linha">

                    <div class="col-5">
                        <img src="assets/img/lacoste.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="assets/img/adidas.webp" alt="">
                    </div>
                    <div class="col-5">
                        <img src="assets/img/converse.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="assets/img/reserva.webp" alt="">
                    </div>
                    <div class="col-5">
                        <img src="assets/img/fila.jpg" alt="">
                    </div>
                    <div class="col-5">
                        <img src="assets/img/calvin-klein5506.jpg" alt="">
                    </div>

                </div>
            </div>
        </div>

     <!--FIM MARCAS-->

<?php 

$currentPage = 'index';
include_once ('adm/footer.php');

?>