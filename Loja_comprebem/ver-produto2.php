<?php

$correntPage = 'contato';
include_once ('adm/header.php');

?>

                <img src="assets/img/260.png" alt="" width="30px" height="30px">
            
                <img src="assets/img/menu.png" alt="" class="menu-celular" onclick="menucelular()">

            </div>
            <!--FIM NAVEGAÇÃO TOPO-->
        </div>
        <!--FIM CONTAINER-->

        <!--INICIO PRODUTOS DETALHES-->
        <div class="corpo-categorias ver-produto">
            <div class="linha">

                <div class="col-2"> 
                    <img src="assets/img/botafogo.webp" alt="Camisa Flamengo" id="produtoImg">

                    <!--LINHA DA GALERIA-->
                    <div class="img-linha">
                    
                        <!--INICIO ITEM GALERIA-->
                     <div class="img-col">
                        <img src="assets/img/botafogo1.webp" alt="" width="100%" class="produtoMiniatura">
                    </div>
                    <!--FIM ITEM GALERIA-->

                    <!--INICIO ITEM GALERIA-->
                     <div class="img-col">
                        <img src="assets/img/botafogo2.webp" alt="" width="100%" class="produtoMiniatura">
                    </div>
                    <!--FIM ITEM GALERIA-->

                    <!--INICIO ITEM GALERIA-->
                    <div class="img-col">
                        <img src="assets/img/botafogo3.webp" alt="" width="100%" class="produtoMiniatura">
                    </div>
                    <!--FIM ITEM GALERIA-->

                    <!--INICIO ITEM GALERIA-->
                    <div class="img-col">
                        <img src="assets/img/botafogo.webp" alt="" width="100%" class="produtoMiniatura">
                    </div>
                    <!--FIM ITEM GALERIA-->

                </div>
                <!--FIM LINHA DA GALERIA-->

                </div>

                <div class="col-2">
                    <P>Camisa Botafogo Retrô 1942 Multicores</P>
                    <h1>Compre com desconto</h1>
                    <h4>R$ 139,90</h4>
                    <form action="" method="post">
                        <select name="" id="">
                            <option value="">Selecione o tamanho</option>
                            <option value="">P</option>
                            <option value="">M</option>
                            <option value="">G</option>
                            <option value="">XG</option>
                            <option value="">XXG</option>
                        </select>

                        <input type="number" name="" id="" value="1">

                        <button type="submit" class="btn">Adicionar ao carrinho</button>
                    </form>
            
                    <h3>Descrição:</h3>
                    <p>	AEROREADY: Desenvolvida para proporcionar respirabilidade e absorção do suor para comodidade duradoura.</p>
                
                </div> 
            </div>
        </div>
        <!--FIM PRODUTOS DETALHES-->

        <!--INICIO TITULO PRODUTOS DETALHES-->
        
        <!--FIM  TITULO PRODUTOS DETALHES-->

        <div class="corpo-categorias">
        <div class="linha linha2">
            <h2>Produtos Relacionados</h2>
            <p>Veja Mais</p>
        </div>
    </div>
     <!--FIM BANNER-->

     <!--INICIO PRODUTOS EM DESTAQUE-->
        
         
        <!--INICIO LINHA DO CORPO CATEGORIAS EM DESTAQUE-->
        <div class="linha">

            <!--INICIO ITEM PRODUTOS EM DESTAQUE-->
            <div class="col-4">
                    <a href="ver-produto.php" title="">
                    <img src="assets/img/fla1.avif" alt="">
                    </a>
                <h4>Camisa Adidas Flamengo I 2023 com Patrocínio</h4>
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
                
                <img src="assets/img/botafogo.webp" alt="">
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
        </div>
        <!--FIM LINHA DO CORPO CATEGORIAS EM DESTAQUE-->
        

<?php

$currentPage = 'ver-produto2';
include_once ('adm/footer.php');

?>