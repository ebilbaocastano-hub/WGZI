<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 24</title>
</head>
<body>
    <?php 
    
        $paises = array ("alemania","brasil","italia","txile","uruguay","australia");
        echo"Hiriak: ";
        echo"<br>";
        foreach($paises as $pais){
            print_r($pais);
            echo"<br>";
        }
        echo"<br>";
        unset($paises[0], $paises[2], $paises[5]);
        echo"Hiriak: ";
        echo"<br>";
        foreach($paises as $pais){
            print_r($pais);
            echo"<br>";
        }
        echo"<br>";
        array_push($paises,"Argentina","Bolivia");
        echo"Hiriak: ";
        echo"<br>";
        foreach($paises as $pais){
            print_r($pais);
            echo"<br>";
        }

        echo"<br>";
        echo"Hiriak: ";
        echo"<br>";
        sort($paises);
        foreach($paises as $pais){
            print_r($pais);
            echo"<br>";
        }
    ?>
</body>
</html>