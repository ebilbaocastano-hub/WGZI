<?php 

    $sarrera = "eder bilbao";

    $letralarriz = strtoupper($sarrera);
    $letraxehea = strtolower($sarrera);
    $luzeera = strlen($sarrera);
    $Lehena = substr($sarrera, 0, 1);
    $azkena = substr($sarrera, -1, 1);
    $bananduta = explode(' ', $sarrera);
    $izena = ucfirst(strtolower($bananduta[0]));
    $abizena = ucfirst(strtolower($bananduta[1]));
    $karakterea3 = substr($sarrera, 2, 1);
    $karakterea5 = substr($sarrera, 4, 1);
    
?>
<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 5</title>
</head>
<body>
    <h1>String Funtzioak</h1>
    <br>
    <p> <?php echo "<b>Izen-abizenak letra larriz:</b> $letralarriz" ?> </p>
    <p> <?php echo "<b>Izen-abizenak letra xehez:</b> $letraxehea" ?> </p>
    <p> <?php echo "<b>Izen-abizenaren luzera:</b> $luzeera" ?> </p>
    <p> <?php echo "<b>Lehenengo karakterea:</b> $Lehena" ?> </p>
    <p> <?php echo "<b>Azken karakterea:</b> $azkena" ?> </p>
    <p> <?php echo "<b>Izena: </b> $izena <b>Abizena: </b> $abizena" ?> </p>
    <p> <?php echo "<b>3. karakterea:</b> $karakterea3"  ?> </p>
    <p> <?php echo "<b>5. karakterea:</b> $karakterea5" ?> </p>
    
</body>
</html>