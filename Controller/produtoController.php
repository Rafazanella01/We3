<?php

require_once __DIR__ . "/../models/Requisicao.php";
require_once __DIR__ . "/../models/Produto.php";

function listar_produtos()
{
    $produtos = Requisicao::requisicaoProdutos();
    $lista_de_produtos = Produto::verificaRetornaArrayProdutos($produtos);

    return $lista_de_produtos;
}
