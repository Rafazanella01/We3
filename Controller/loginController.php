<?php
session_start();

require __DIR__ . "/../models/Requisicao.php";
require __DIR__ . "/../models/Usuario.php";

$cpf = $_POST["cpf"];
$email = $_POST["email"];

if (isset($cpf) && isset($email)) {
    verifica_e_redireciona_usuario($cpf, $email);
}
/**
 * Verifica se o CPF e EMAIl passados são válidos
 * Caso verdadeiro redireciona o usuário para a pagina inicial logado
 * Caso falso redireciona para a pagina de Login com uma mensagem de erro
 */
function verifica_e_redireciona_usuario(String $cpf, String $email)
{
    $pessoa_api = Requisicao::requisicao_login($cpf, $email);
    $usuario = Usuario::verifica_retorna_usuario($pessoa_api);

    if ($usuario != false) {
        $_SESSION["cpf"] = $usuario->get_cpf();
        $_SESSION["email"] = $usuario->get_email();
        $_SESSION["id"] = $usuario->get_id_pessoa();
        $_SESSION["nome"] = $usuario->get_nome();

        header("Location: ../views/paginaInicial.php");
    } else {
        $_SESSION["mensagem_erro"] = "Email ou CPF inválidos, tente novamente!";
        header("Location: ../views/paginaLogin.php");
    }
}
