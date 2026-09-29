<?php

$ikasleak = array(

    "Eder" => array(
        "Abizenak" => "Bilbao",
        "Adina" => "19",
        "Zikloa" => "DAW"
    ),
    "Aratz" => array(
        "Abizenak" => "Elexpe",
        "Adina" => "18",
        "Zikloa" => "DAM"
    ),
    "Markel" => array(
        "Abizenak" => "Abascal",
        "Adina" => "22",
        "Zikloa" => "ASIR"
    )
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 19</title>
</head>
<body>
    <h1>IKASLEAK: </h1>
    <br>
    <?php 
    foreach($ikasleak as $ikaslea => $ikasleen_datuak){
        echo"Izena: $ikaslea <br>";
            foreach($ikasleen_datuak as $datu_mota => $datua){
               echo "<ul><li>$datu_mota: $datua</li></ul>";
               
            }   
        }
    ?>
</body>
</html>