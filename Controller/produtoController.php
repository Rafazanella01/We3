<?php

require_once __DIR__ . "/../models/Requisicao.php";
require_once __DIR__ . "/../models/Produto.php";

/**
 * Faz a requisição à API e retorna uma lista com produtos, 
 * Essa lista de produtos é filtrada para separar apenas os produtos que queremos, 
 * A lista é retornada
 */
function filtrar_produtos()
{
    $produtos = Requisicao::requisicao_produtos();
    $lista_de_produtos = Produto::verifica_retorna_array_produtos($produtos);

    if ($lista_de_produtos != false) {
        $lista_filtrada = [];
        foreach ($lista_de_produtos as $produtos) {
            if (
                $produtos->get_id_produto() == 'b6e37743fcf6c7c3183943d295deda180e3bcf9e'
                || $produtos->get_id_produto() == '94ce8004f9071e516f4cd8546ed2435bb55bb2dd'
                || $produtos->get_id_produto() == '3fab5e6eecf611346fe015183acaf0d5'
                || $produtos->get_id_produto() == '813c298e4a0898e095ae1233083d72e45a1ca3e2'
                || $produtos->get_id_produto() == 'fc2bffaceb680cd4c728c96a487b86a877a39ffd'
                || $produtos->get_id_produto() == '09ac119baeacc1ea998fe84cddd93a7bfe263df2'
            ) {

                array_push($lista_filtrada, $produtos);
            }
        }
        return $lista_filtrada;
    }
    return false;
}
/**
 * Uma lista de produtos e um ID são passados como parâmetros
 * O metodo percorre a lista procurando o ID informado e retorna o Objeto produto
 */
function retorna_produto_por_id(array $lista_produtos, string $id)
{
    if (!empty($lista_produtos) && !empty($id)) {
        foreach ($lista_produtos as $produto) {
            if ($produto->get_id_produto() == $id) {
                return $produto;
            }
        }
    }
    return false;
}
/**
 * Essa função é usada para criar/atualizar o carrinho de compras salvo na sessao do usuario
 * Se houver algum novo produto setado o programa atualiza a lista
 * Se não houver novo produto a lista é retornada
 */
function retorna_carrinho_de_compras_sessao(array $lista_de_produtos)
{

    if (!isset($_SESSION['produtos'])) {
        $_SESSION['produtos'] = array();
    }

    if (isset($_POST['produto'])) {
        $produtosSelecionados = $_POST['produto'];
        $produto = serialize(retorna_produto_por_id($lista_de_produtos, $produtosSelecionados));

        array_push($_SESSION['produtos'], $produto);
    }

    return $_SESSION['produtos'];
}
