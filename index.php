<?php
include 'menu.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Página Responsiva</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Overlock+SC&display=swap">
</head>

<body>
    <div style="width: 200px; height: 10px;"></div>

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

        <div class="elementCenter">
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

            <div class="elementRight vcSabiaContainer">
                <img src="img/vcsabia.png" alt="iconeVoceSabia">
                <div id="vcSabia">
                    As telas LCD podem ser a interferência no sinal do roteador. Isso acontece porque algumas delas transmitem uma corrente elétrica harmônica que se une às ondas eletromagnéticas do roteador e as distorce, fazendo com que o sinal não se propague.
                    Se algum cliente sofre com esse problema, ele tem solução! Essa corrente elétrica harmônica só atrapalha quando é utilizada a rede 2,4 GHz. Portanto, se você atualizar seu aparelho modem para um dual band e utilizar a rede 5 GHz, sua conexão não terá mais essa interferência.
                    É importante validar se os aparelhos casa do cliente são compatíveis com essa frequência para que funcione tudo corretamente.
                </div>
            </div>

        </div>
    </div>

    <!-- SCRIPTS BOOTSTRAP, JQUERY E FontAwesome -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./script.js"></script>
</body>

</html>