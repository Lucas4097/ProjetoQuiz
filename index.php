<?php
include "PHP/conexao.php";
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puzzle Brain</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="..\CSS/stylegeral.css">
    <link rel="stylesheet" href="..\CSS/button.css">
    <link rel="icon" type="image/png" href="..\Midia\Img\puzzle-removebg-preview.png" />
</head>
<body class="font-sigmar bg-fundosite">
    <section class="container mt-4">

        <header class="d-flex justify-content-center my-3">
            <h1 class="text-light fs-1 mx-auto mb-0">Puzzle Brain</h1>
            <?php
            if (isset($_SESSION['usuario'])){
            ?>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php
                    echo $_SESSION['usuario'];
                    ?>
                </button>
                <ul class="dropdown-menu bg-primary">
                    <li><a onclick="return confirm('Quer deslogar de sua conta?')" class="dropdown-item dropdown-botao" href="PHP/logout.php">Logout</a></li>
                </ul>
            </div>
            <?php
            }
            ?>
        </header>

        <main>
         

            <div class="my-4 btn-group my-5 d-flex align-content-center justify-content-center gap-2 flex-wrap">
                <a class="btn btn-primary bg-botao-versao2 btn btn-outline-light btn-lg" href="PHP/game.php"> Jogar </a>
                <a class="btn btn-primary bg-botao-versao2 btn btn-outline-light btn-lg" href="PHP/ranking.php">Ver Rank</a> 
                <a class="btn btn-primary bg-botao-versao2 btn btn-outline-light btn-lg" href="PHP/cadastro.php">Fazer Cadastro</a>
                <a class="btn btn-primary bg-botao-versao2 btn btn-outline-light btn-lg" href="PHP/login.php">Fazer Login</a>
                <a class="btn btn-primary bg-botao-versao2 btn btn-outline-light btn-lg" href="PHP/sobre.php">Saiba Mais</a>

            </div>
        </main>
    </section>

    <?php
    include "Components/copyright.html";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>

