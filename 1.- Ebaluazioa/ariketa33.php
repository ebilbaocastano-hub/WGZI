<?php 

    $ikasleak [] = array();

    function ikasleaSortu($ikasleIzena, $ikasleAdina, $kalifikazioak){
        global $ikasleak;
        $ikasleak[$ikasleIzena] = array("adina" => $ikasleAdina, "kalifikazioak" => $kalifikazioak);
        return $ikasleak;
    }
                                        // En el caso de que quieras pasar el array como parametro.
    function ikasleaErakutsi($ikasleIzena /*, $ikasleak*/){
        // Al hacerlo con parametro el global no es necesario
        global $ikasleak;
        if (array_key_exists($ikasleIzena, $ikasleak)) {
            echo "Ikaslea: " . $ikasleIzena . "<br>";
            echo "Adina: " . $ikasleak[$ikasleIzena]["adina"] . "<br>";
            echo "<br>";
            echo "Kalifikazioak: <br>"; // echo "kalifikazioak: " . implode(", ", $ikasleak[$ikasleIzena]["kalifikazioak"]) . "<br>";
            foreach($ikasleak[$ikasleIzena]["kalifikazioak"] as $nota){
                echo "Nota: " . $nota . "<br>";
            }
            echo "Batazbestekoa: " . batazbestekoa($ikasleak[$ikasleIzena]) . "<br>";
        } else {
            echo "$ikasleIzena ez da existitzen.<br>";
        }
    }

    function batazbestekoa($ikaslea){
        return array_sum($ikaslea["kalifikazioak"]) / count($ikaslea["kalifikazioak"]);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 33</title>
</head>
<body>
    <h1>Ikasleak</h1>
    <?php 
        ikasleaSortu("Jon", 20, array(8.5, 9.0, 7.5, 6.0, 8.0, 9.5));
        ikasleaSortu("Maria", 22, array(9.0, 8.5, 7.0, 6.5, 8.0, 9.0));
        ikasleaSortu("Ane", 19, array(7.5, 8.0, 6.5, 5.0, 7.0, 8.5));
        ikasleaErakutsi("Jon");
        echo "<br>";
        ikasleaErakutsi("Maria");
        echo "<br>";
        ikasleaErakutsi("Ane");
    ?>
</body>
</html>