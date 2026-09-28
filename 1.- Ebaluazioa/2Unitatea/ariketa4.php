<?php

const UNIBERTSITATEA = "Euskal Herriko Unibertsitatea";
const GRADU_KREDITOAK = 240;
const IKASTAROA_PREZIOA = 1250.75;

// define("UNIBERTSITATEA","Euskal Herriko Unibertsitatea");

$ikasle_izena = "Eder Bilbao";
$orain_arte_kreditoak = 45;
$batez_besteko_nota = ($orain_arte_kreditoak / GRADU_KREDITOAK) * 10 ;
$ikastaro_bukatua = false;
$falta_diren_kredituak = GRADU_KREDITOAK - $orain_arte_kreditoak;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Ikaslearen informazioa</h2>

    <p>Ikaslearen izena: <?php echo "$ikasle_izena" ?></p>
    <p>Unibertsitatea: <?php echo UNIBERTSITATEA ?></p>
    <p>Orain arteko kreditoak: <?php echo "$orain_arte_kreditoak /". GRADU_KREDITOAK ?> </p>
    <p>Orain arteko kreditoak: <?php echo $batez_besteko_nota ?></p>
    <p>Batez besteko nota (kalkulatua): <?php echo $batez_besteko_nota ?> </p>
    <p>Ikastaroa bukatuta: <?php echo $ikastaro_bukatua ? "Bai" : "Ez"; ?></p>
    <p>Falta diren kredituak: <?php echo $falta_diren_kredituak ?></p>
    <p>Ordaindu beharreko prezioa: <?php echo IKASTAROA_PREZIOA; ?>€</p>
</body>

</html>