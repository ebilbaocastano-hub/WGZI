<?php 

    function erreferentziaparam(&$numero){
        $numero++;
        echo"Funtzio barruan: $numero \n";

    }
    $zbk1 = 5;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 29</title>
</head>
<body>
    <h1>Erreferentzi Funtzioak</h1>

    <?php 
    
        erreferentziaparam($zbk1);
        echo "Funtzio kanpoan: $zbk1";
    
    ?>
</body>
</html>