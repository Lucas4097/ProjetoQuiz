<?php
include "conexao.php";
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Puzzle Brain</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <?php
                    echo $_SESSION['usuario'];
                    ?>
                </button>
                <ul class="dropdown-menu bg-primary">
                    <li><a onclick="return confirm('Quer deslogar de sua conta?')" class="dropdown-item dropdown-botao"
                            href="PHP/logout.php">Logout</a></li>
                </ul>
            </div>
            <?php
            }
            ?>
        </header>

        <main class="text-light">

            <section>
                <h1>O que é o projeto/jogo Puzzle Brain?</h1>
                <p>Puzzle Brain é um jogo educacional desenvolvido por estudantes do ensino médio do IF-Sertão.
                    Seu Objetivo é ensinar os estudantes e público em geral, conceitos importantes de História,
                    Matemática e Português, que posteriormente, poderá
                    ajuda-lós em trabalhos escolares e até mesmo, no mercado de trabalho.
                    O jogo conta com ganho de pontis para questões que estejam corretas, Rank de Pontuação, que mostra
                    os melhores jogadores e sua pontuação correspondente
                    e também um sistema de login e cadastro.</p>
            </section>

            <section>
                <h1>Como jogar e como funciona o Puzzle Brain?</h1>
                <p>Para jogar nosso jogo, é preciso apenas utilizar o toque no celular e no computador, o mouse.
                    Caso deseje jogar sem acesso a internet, você pode baixar a página e jogar aonde quiser!

                    O jogo conta com 10 rodadas com 4 alternativas em forma de quiz e apenas uma é a correta.
                    É permitido 1 tentativa por vez em cada pergunta por rodada.
                    No fim da rodada, aparecerá a pontuação do jogador, o rank e a opção de tentar novamente.</p>
            </section>

            <div class="my-4 btn-group my-5 d-flex align-content-center justify-content-center gap-1 flex-wrap">
                <a class="btn btn-primary bg-botao-versao2 btn btn-outline-light btn-lg" href="../index.php">Voltar pra
                    tela inicial</a>
            </div>
        </main>
    </section>

    <footer>
        <hr style="margin-top:50px;" />
        <table class="table" class="text-center my-3 text-light">
            <thead>
                <tr>
                    <th class="text-center my-3 text-light" colspan="4"> Contato e redes sociais</th>
                </tr>
            </thead>



            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
                crossorigin="anonymous"></script>

            <div class="row">

                <div class="col-lg-9 lead">

                    <style>
                        table,
                        td,
                        th,
                        tfoot {
                            border: solid 1px #5c65c0;
                            padding: 5px;
                        }

                        th {
                            background-color: #5c65c0;
                        }

                        caption {
                            font-size: x-large;
                        }
                    </style>

                    <table class="table" class="text-center my-3 text-light">

                        <tbody>
                            <tr>
                                <td class="text-center my-3 text-light" rowspan="2">Acesse as redes sociais dos alunos e
                                    saiba mais</td>
                                <td class="text-center my-3 text-light"> Lucas Alencar</td>
                                <td class="text-center my-3 text-light"> Geiziane Rodrigues</td>
                                <td class="text-center my-3 text-light"> Marcelo Victor</td>
                            </tr>
                            <tr>
                                <td class="text-center my-3 text-light">@Testando@gmail.com<< /td>
                                <td class="text-center my-3 text-light">@Testando@gmail.com</td>
                                <td class="text-center my-3 text-light">@Testando@gmail.com<< /td>
                            </tr>
                        <tfoot>
                            <tr>
                                <td class="text-center my-3 text-light" colspan="4">© 2019-2022 Puzzle Brain Co., Inc.
                                    Todos os direitos
                                    reservados.</td>
                            </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>