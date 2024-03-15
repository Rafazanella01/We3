<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/style.css">
    <style>
        body {
            background-image: url("../public/Images/5fb066ec8a0edd8e5aa8b4f2ed1b2e8e.jpg");
        }
    </style>
    <title>Compra finalizada</title>
</head>

<body>
    <h1>Compra finalizada com sucesso!</h1>
    <h1>Informações sobre o pedido foram enviadas para o email: <?php echo $_SESSION['email'] ?></h1>

</body>

</html>

<?php session_destroy(); ?>