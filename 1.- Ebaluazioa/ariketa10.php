<?php 

    $izena = "Aitor";
    $abizena1 ="Olabarria";
    $abizena2 = "Iriondo";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Konprobazioak</h1>
    <p>Izena: <?php echo $izena?> Abizena 1: <?php echo $abizena1?> Abizena 2: <?php echo $abizena2 ?></p>

    <?php 
    if ($izena == "Garazi" || ($abizena1 == "Olabarria" && $abizena2 == "Iriondo")){
        echo "Ongi etorri $izena $abizena1 $abizena2";
    } else{
        echo "Ez du sarbiderik";
    }
    
    
    ?>
</body>
</html>