<?php

class Usuario
{

    private $nome;
    private $email;
    private $cpf;
    private $idpessoa;

    public function __construct(string $nome, string $email, string $cpf, string $idpessoa)
    {

        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->idpessoa = $idpessoa;
    }
    //Getters
    public function get_nome()
    {
        return $this->nome;
    }
    public function get_email()
    {
        return $this->email;
    }
    public function get_cpf()
    {
        return $this->cpf;
    }
    public function get_id_pessoa()
    {
        return $this->idpessoa;
    }
    /**
     * Essa função existe para receber o retorno da API de usuários
     * A função valida se os dados estão setados, cria um objeto USUARIO e retorna
     */
    public static function verifica_retorna_usuario(array $pessoa)
    {

        if ($pessoa && isset($pessoa['result']['results'][0])) {
            $dados = $pessoa['result']['results'][0];

            $usuario = new Usuario(
                $dados['nome'],
                $dados['email'],
                $dados['cpf'],
                $dados['idpessoa']
            );

            return $usuario;
        }
        return false;
    }
}
