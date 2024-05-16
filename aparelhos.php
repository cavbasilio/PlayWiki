<?php 
    include 'menu.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aparelhos</title>
    <link rel="stylesheet" href="./css/aparelho.css"> 
</head>
<body>

<div class="container">
    <ul class="list-group" id="listGroup">
        <li class="list-group-item">
            <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="showImage('img/aparelhos_descri/maxprint-branca.png')">Maxprint-Branca(MAXFIBER 1200G2)</button>
        </li>
        <li class="list-group-item">
            <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="showImage('img/aparelhos_descri/maxprint-preta.png')">Maxprint Preta(MAXFIBER 1200GM FXS)</button>
        </li>
        <li class="list-group-item">
            <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="showImage('img/aparelhos_descri/raisecom-dualband.png')">Raisecom DualBand</button>
        </li>
        <li class="list-group-item">
            <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="showImage('img/aparelhos_descri/nokia-azul.png')">Nokia G-140W(AZUL)</button>
        </li>
        <li class="list-group-item">
            <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="showImage('img/aparelhos_descri/nokia-verde.png')">Nokia G-240w-c (VERDE)</button>
        </li>
        <li class="list-group-item">
            <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="showImage('img/aparelhos_descri/shoreline.png')">Shoreline</button>
        </li>
        <li class="list-group-item">
            <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="showImage('img/aparelhos_descri/intelbras.png')">Intelbras</button>
        </li>
        <li class="list-group-item">
            <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="showImage('img/aparelhos_descri/huawei-preta.png')">Huawei PRETA(HG8145)</button>
        </li>
        <li class="list-group-item">
            <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="showImage('img/aparelhos_descri/ac-unee.png')">AC Unee by Stavix MP-G421R</button>
        </li>
        <li class="list-group-item">
            <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="showImage('img/aparelhos_descri/d-link.png')">D-Link</button>
        </li>
        <li class="list-group-item">
            <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="showImage('img/aparelhos_descri/tp-link.png')">Tp-link</button>
        </li>
        <li class="list-group-item">
            <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="showImage('img/aparelhos_descri/zte-670l.png')">ZTE 670L</button>
        </li>
        <li class="list-group-item">
            <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="showImage('img/aparelhos_descri/zte-ax3000.png')">ZTE AX3000 F6600p</button>
        </li>
    </ul>
    <div id="imageContainer">
        <button id="closeButton" onclick="closeImage()">Fechar</button>
        <img src="" alt="Imagem do aparelho" id="image">
    </div>
</div>

<script src="script.js"></script>
</body>
</html>
