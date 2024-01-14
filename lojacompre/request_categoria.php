<?php

include 'conexao.php';

$nvcategoria = $_POST['txtcategoria'];

try {
    $inserir = $cn ->query("insert into tbl_categoria(nm_categoria) VALUE ('$categoria')");
    header('Location:adm.php');
}catch(PDOException $e) // se houver algum erro explodir na tela a mensagem de erro
{  
	echo $e->getMessage();
}
?>