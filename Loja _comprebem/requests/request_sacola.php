<?php

include_once ('../../banco_de_dados/database.php');

function adicionarProdutoAoCarrinho($produto_id, $quantidade, $preco) {
    // Se o carrinho não existir, crie um array vazio
    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = array();
    }

    // Verifique se o produto já está no carrinho
    if (isset($_SESSION['carrinho'][$produto_id])) {
        // Se sim, atualize a quantidade
        $_SESSION['carrinho'][$produto_id]['quantidade'] += $quantidade;
    } else {
        // Se não, adicione o produto ao carrinho
        $_SESSION['carrinho'][$produto_id] = array(
            'quantidade' => $quantidade,
            'preco' => $preco
        );
    }
}

// Exemplo de uso
$produto_id = 1; // Substitua pelo ID do produto
$quantidade = 2; // Substitua pela quantidade desejada
$preco = 19.99; // Substitua pelo preço do produto

adicionarProdutoAoCarrinho($produto_id, $quantidade, $preco);

// Visualize o carrinho (opcional)
echo '<pre>';
print_r($_SESSION['carrinho']);
echo '</pre>';

?>
