<?php 
    $zbk1 = 10;
    $zbk2 = 5;

    $batuketa = $zbk1 + $zbk2;
    $kenketa = $zbk1 - $zbk2;
    $biderketa = $zbk1 * $zbk2;
    $zatiketa = $zbk1 / $zbk2;
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 3</title>
</head>
<body>
    <h1>Ariketa Aritmetikoak</h1>

    <p> <?php echo "Lehenego zenbakia = $zbk1" ?> </p>
    <p> <?php echo "Bigarren zenbakia = $zbk2" ?> </p>
    <br>
    <p> <?php echo "Batuketa = $batuketa" ?> </p>
    <p> <?php echo "kenketa = $kenketa" ?> </p>
    <p> <?php echo "biderketa = $biderketa" ?> </p>
    <p> <?php echo "zatiketa = $zatiketa" ?> </p>

    <h1>Inkrementuak eta Dekrementuak</h1>
    <p>    <?php
        $a = 5;
        $b = ++$a;
        print "a aldagaiaren balioa da $a eta b aldagaiarena $b <br>" ;

        $a = 5;
        $b = $a++;
        print "a aldagaiaren balioa da $a eta b aldagaiarena $b <br>" ;
    ?></p>
</body>
</html>