<?php
include("conexao.php");
include("verific_login.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fim de jogo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/stylegeral.css">
    <link rel="stylesheet" href="../CSS/button.css">
</head>
<body class="font-sigmar bg-fundosite">
    <div class="container mt-4">
        <div menu>
            <h1 class="text-center my-3 text-light">Puzzle Brain</h1>
            <p class="text-center my-3 text-light"> Você chegou ao fim dessa rodada!
            </p>
            <?php
            $query_id_pont = mysqli_query($mysqli, "SELECT MAX(id_pont) as id_pont FROM pontuacao");
            $row_id_pont = mysqli_fetch_assoc($query_id_pont);
            $query_pontos = "SELECT * FROM pontuacao WHERE id_pont = ". $row_id_pont['id_pont'];
            $result_pontos = mysqli_query($mysqli, $query_pontos);
            $row_pontos = mysqli_fetch_assoc($result_pontos);
            ?>
            <p class="text-center my-3 text-light"> Sua pontuação foi de
                <?php
                echo ($row_pontos['Pontuacao']);
                ?>
            </p>
            <p class="text-center my-3 text-light">
            Ah não! Essa partida chegou ao fim! Mas caso queira jogar novamente, escolha a opção "Tentar Novamente"  
            ou se preferir, escolha "Rank de Pontos" para ver as top 10 pontuação </p>
        </div>
        <div class="my-4 btn-group my-5 d-flex align-content-center justify-content-center gap-1">
            <a class="btn btn-primary bg-botao-versao2 btn btn-outline-light btn-lg" href="game.php">Tentar Novamente</a>
            <a class="btn btn-primary bg-botao-versao2 btn btn-outline-light btn-lg" href="ranking.php">Rank de Pontos</a>
        </div>
    </div>        
    </body>
</html>