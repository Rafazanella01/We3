<?php

class Produto
{

    private $idproduto;
    private $dscproduto;
    private $preco;
    private $count = 1;
    public function __construct(string $idproduto, string $dscproduto, float $preco)
    {

        $this->idproduto = $idproduto;
        $this->dscproduto = $dscproduto;
        $this->preco = $preco;
    }

    //Getters
    public function get_id_produto()
    {
        return $this->idproduto;
    }
    public function get_dsc_produto()
    {
        return $this->dscproduto;
    }
    public function get_preco()
    {
        return $this->preco;
    }
    public function get_count()
    {
        return $this->count;
    }
    /**
     * Essa função é feita para receber o retorno da API de produtos
     * Ela recebe como parâmetro a lista de produtos
     * Verifica se tudo está setado corretamente
     * Percorre a lista, salva os dados em um objeto PRODUTO, salva em um array e retorna o array
     */
    public static function verifica_retorna_array_produtos(array $produtos)
    {
        if ($produtos && isset($produtos['result'])) {

            $lista_produtos_api = $produtos['result'];
            $lista_de_produtos = [];

            foreach ($lista_produtos_api as $produto_dados) {
                $produto = new Produto(
                    $produto_dados['idproduto'],
                    $produto_dados['dscproduto'],
                    floatval($produto_dados['preco'])
                );

                array_push($lista_de_produtos, $produto);
            }
            return $lista_de_produtos;
        }
        return false;
    }
    public function incrementa_count()
    {
        $this->count += 1;
        return $this->count;
    }
}
