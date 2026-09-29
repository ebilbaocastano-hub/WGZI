<?php 

    $ikasleen_notak = array("Ander"=>"1", "Bego"=>"10", "Jon"=>"10");
    $batazbestekoa = array_sum($ikasleen_notak)/count($ikasleen_notak);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 20</title>
</head>
<body>
    <?php 
    
        foreach($ikasleen_notak as $ikaslea => $nota){
            echo "Izena: $ikaslea - Nota: $nota";
            echo"<br>";
            
        }
        echo "Noteen batazbestekoa: $batazbestekoa";
    ?>
</body>
</html>