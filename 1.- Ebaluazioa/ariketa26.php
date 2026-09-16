<?php 

    $contador = 0;
    $zbk = 0 ;
    $zenbakiak = [];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 26</title>
</head>

<body>
    <h1>Zenbakia asmatzen...</h1>
    <p>5 saiakera dituzu zenbakia zen dein asmatzeko: </p>

    <?php

    do {

        
        $zbk = rand(1, 10);
        $auzaskoa = rand(1, 10);

        if(in_array($zbk, $zenbakiak,true) ){
            echo"Zenbakia $zbk berriro aukeratu duzu, saiatu berriz";
            continue;
        }
        $zenbakiak[] = $zbk;
        $contador++;
        echo "Saiakera $contador: <br>";
        echo "Aukeratutako zenbakia $auzaskoa da. <br>";

        if ($auzaskoa == $zbk) {
            echo "Zuzena asmatu duzu! <br>";
        } else {
            if ($contador == 5) {
                echo "Ez duzu asmatu 5 saiakeran. Zenbakia $zbk zen. <br>";
            } else {
                echo "Saiakera okerra, berriro saiatzen...<br>";
            }
        }
    } while ($auzaskoa != $zbk && $contador != 5);

    ?>

</body>

</html>