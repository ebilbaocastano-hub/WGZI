<?php 

    function kalkulatuBEZ ($salneurria, $BEZ=21){

        $bezporzentaia = ($salneurria + $BEZ) / 100;
        $emaitza = $salneurria - $bezporzentaia;
        return $emaitza;
    }
    $salneurria = 10;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 30</title>
</head>
<body>
    <h1>Kalkulatu BEZ-a</h1>
    <?php 
        echo "Kalkulatzen BEZ-a $salneurria zenbakiarena: ";
        echo kalkulatuBEZ($salneurria);

     ?>
</body>
</html>