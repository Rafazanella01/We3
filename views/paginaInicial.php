<?php session_start() ?>

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
    <title>Pagina inicial | Filmes </title>
</head>

<body>
    <h1>Filmes em cartaz</h1>
    <form action="../views/listaDeProdutos.php" method="post">

        <div class="filmes-container">

            <div class="filme">
                <img src="../public/Images/ForrestGump.webp" alt="Forrest Gump">
                <h2>Forrest Gump</h2>
                <button class="comprar-botao" type="submit" name="filme" value="Forrest Gump">Comprar Ingresso</button>
            </div>

            <div class="filme">
                <img src=" ../public/Images/big-poster-filme-de-volta-para-o-futuro-2-lo002-tam-90x60-cm-de-volta-para-o-futuro-2.jpg" alt="De volta para o futuro II">
                <h2>De volta para o futuro II</h2>
                <button class="comprar-botao" type="submit" name="filme" value="De volta para o futuro II">Comprar Ingresso</button>
            </div>

            <div class="filme">
                <img src="../public/Images/IndianaJones.jpg" alt="Indiana Jones e a Última Cruzada">
                <h2>Indiana Jones e a Última Cruzada</h2>
                <button class="comprar-botao" type="submit" name="filme" value="Indiana Jones e a Última Cruzada">Comprar Ingresso</button>
            </div>

            <div class="filme">

                <img src="../public/Images/StarWars.jpg" alt="Star Wars Episódio IV">
                <h2>Star Wars Episódio IV</h2>
                <button class="comprar-botao" type="submit" name="filme" value="Star Wars Episódio IV">Comprar Ingresso</button>
            </div>

        </div>

    </form>

</body>

</html>