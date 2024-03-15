<?php

session_start();

if (isset($_SESSION["mensagem_erro"])) {
    echo '<h1>' . $_SESSION["mensagem_erro"] . '</h1>';
    unset($_SESSION["mensagem_erro"]);
}

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
    <title>Cinema IMPLY | Login</title>
</head>

<body>
    <h1>Cinema Imply</h1>
    <form action="../Controller/loginController.php" method="post">
        <div class="form">
            <br>
            <label for="cpf">Cpf</label>
            <br>
            <input type="text" name="cpf" id="cpf">
            <br>
            <label for="email">E-mail</label>
            <br>
            <input type="text" name="email" id="email">
            <br>
            <br>
            <input class="comprar-botao" type="submit" value="Entrar">
        </div>
        </div>
    </form>
    <br>
</body>

</html>