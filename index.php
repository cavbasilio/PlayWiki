<?php
include './componentes/menuLateral.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/logoPlay.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/index.css">
    <style>
        .retangulo {
            background-color: #ccc;
            padding: 20px;
            margin-bottom: 20px;
            text-align: center;
            width: 68%;
            margin: 15px 0 0px 26%;
        }

        .retangulo h3 {
            margin-top: 0;
            font-size: 20px;
            color: #333;
        }
    </style>
</head>

<body>
    <div class="retangulo">
        <h3>Financeiro</h3>
        <p class="texto">
            Conteúdo futuro para o setor Financeiro...
        </p>
    </div>

    <div class="retangulo">
        <h3>NOC</h3>
        <p class="texto">
            Conteúdo futuro para o setor NOC...
        </p>
    </div>

    <div class="retangulo">
        <h3>SUPORTE</h3>
        <p class="texto">
            Conteúdo futuro para o setor SUPORTE...
        </p>
    </div>
    <div class="main-content">
        <div class="container">
            <div class="elementLeft">
                <span>
                    <h4 class="subtitulo">TÉCNICO DO MÊS</h4>
                </span>
                <div id="imgTecnico">
                    <img src="img/tecDiego.png" alt="tecnico">
                </div>
                <p class="texto">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exercitation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                </p>
            </div>

            <div class="elementRight">
                <h2 class="playNews">PLAY NEWS</h2>
                <p class="texto">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exercitation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                </p>
                <span>
                    <h4 class="aniversarianteMes">ANIVERSARIANTE DO MÊS</h4>
                </span>
                <div id="aniversariante">
                    <img class="aniversariante-img" src="img/Vinicius.png" alt="Aniversariante">
                    <img class="aniversariante-img" src="img/Leonardo.png" alt="Aniversariante">
                    <img class="aniversariante-img" src="img/LucasDutra.png" alt="Aniversariante">
                    <img class="aniversariante-img" src="img/Lidiane.png" alt="Aniversariante">
                </div>
            </div>
        </div> <!-- Fechamento do container -->

        <div class="elementRight">
            <div id="rumo">
                <img src="img/rumoNew.png" alt="">
            </div>
            <span class="subtitulo"></span>
            <div id="countdown"></div>
            <p id="days">
                <span data-days>00</span>
                <span>dias</span>
            </p>
            <div id="timeCompiled">
                <span data-hours>00</span><span>:</span>
                <span data-minutes>00</span><span>:</span>
                <span data-seconds>00</span>
            </div>
            <p class="texto">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exercitation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
            </p>

            <div class="vcSabiaContainer">
                <img src="img/vcsabia.png" alt="iconeVoceSabia">
                <div id="vcSabia">
                    As telas LCD podem ser a interferência no sinal do roteador. Isso acontece porque algumas delas transmitem uma corrente elétrica harmônica que se une às ondas eletromagnéticas do roteador e as distorce, fazendo com que o sinal não se propague.
                    Se algum cliente sofre com esse problema, ele tem solução! Essa corrente elétrica harmônica só atrapalha quando é utilizada a rede 2,4 GHz. Portanto, se você atualizar seu aparelho modem para um dual band e utilizar a rede 5 GHz, sua conexão não terá mais essa interferência.
                    É importante validar se os aparelhos casa do cliente são compatíveis com essa frequência para que funcione tudo corretamente.
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./script.js"></script>
</body>

</html>