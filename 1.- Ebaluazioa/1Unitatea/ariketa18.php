<?php 

    $ikasleen_notak = array("Ander"=>"3.5", "Bego"=>"7", "Jon"=>"6.3");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 18</title>
</head>
<body>
    <?php 
    
        echo $ikasleen_notak["Ander"]; 
        echo "<br>";
        echo $ikasleen_notak["Bego"];
        echo "<br>";
        echo $ikasleen_notak["Jon"];
        echo "<br>";

        foreach($ikasleen_notak as $ikaslea => $nota){
            echo "Ikasle $ikaslea -ren nota $nota da <br>";
        }
    
    ?>
</body>
</html>