<?php
require __DIR__ . "/../Controller/produtoController.php";

session_start();

if (!isset($_SESSION['cpf']) || !isset($_SESSION['email'])) {
    header("Location: ../views/paginaLogin.php");
}

if (!isset($_SESSION['lista_de_produtos'])) {
    $_SESSION['lista_de_produtos'] = filtrar_produtos();
}

$filme = $_POST['filme'];
$lista_de_produtos = $_SESSION['lista_de_produtos'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <style>
        body {
            background-image: url("../public/Images/5fb066ec8a0edd8e5aa8b4f2ed1b2e8e.jpg");
        }
    </style>
    <title>Venda de Produtos | Ingressos</title>
</head>

<body>
    <h1>Produtos</h1>

    <form action="carrinhoDeCompras.php" method="post">

        <h1><?php echo $filme ?></h1>

        <div class="grid-container">

            <?php
            foreach ($lista_de_produtos as $produto) {
            ?>
                <div class="item">

                    <?php echo $produto->get_dsc_produto() . "<br>"; ?>
                    <?php echo "Preço: R$ " .  $produto->get_preco()  . "<br>"; ?>

                    <button class="comprar-botao" type="submit" name="produto" value="<?php echo $produto->get_id_produto(); ?>">Adicionar ao carrinho</button>

                </div>
            <?php
            }
            ?>
        </div>
    </form>
    <footer>

        <a class="a" href="/views/paginaInicial.php">Voltar</a>
        <a class="a" href="/views/carrinhoDeCompras.php">Meu carrinho</a>
        <a class="a" href="/../Controller/encerraSessaoController.php">Encerrar sessão</a>

    </footer>


</body>

</html>