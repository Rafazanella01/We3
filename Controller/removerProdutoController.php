<?php

require __DIR__ . "/../models/Produto.php";
require __DIR__ . "/../models/Carrinho.php";

session_start();

if (isset($_POST['produto'])) {
    $id_produto = $_POST['produto'];
    if (isset($_SESSION['produtos'])) {
        $_SESSION['produtos'] = Carrinho::remover_produto_do_carrinho($_SESSION['produtos'], $id_produto);
    }
}

header("Location: ../views/carrinhoDeCompras.php");
