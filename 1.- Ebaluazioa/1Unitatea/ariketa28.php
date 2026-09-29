<?php 

    function batazbesteko_aritmetikoa($zbk1, $zbk2){

        $emaitza = ($zbk1 + $zbk2) / 2;
        return $emaitza;
    }
    $zbk1 = 7;
    $zbk2 = 3;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 28</title>
</head>
<body>
    <h1>Batazbestekoa</h1>
    <p>Batazbestekoa $zbk1 eta $zbk2 artean: </p>
    <?php 
    
        echo batazbesteko_aritmetikoa($zbk1, $zbk2);
    ?>
</body>
</html>