<?php
    include 'header.php';
?>
<?php

function irudiakErakutsi(){
    echo"<table border'1'><tr>";

    for($i =1; $i <=4;$i++){
        echo "<td><img src='$i.svg' width = '180'></td>";
    }
    echo"</table border'1'></tr>";
}

$aukera = rand(0,5);

switch ($aukera) {
    case "0":
        $ausazkoZbk = rand(0,5);
        echo"Ez du sarbiderik. ";
        echo"Beste zenbaki bat: $ausazkoZbk";
        break;
    case "1":
        echo "Ongi etorri, egun on bat pasa!";
        break;
    case "2":
            $zenbakiBiderkatzailea = rand(0, 9);
            
            for($i = 1; $i < 10; $i++){
                echo "$zenbakiBiderkatzailea x $i = $zenbakiBiderkatzailea * $i";
                echo"<br>";
            }

        break;
    case "3":
            irudiakErakutsi();
        break;
    default:
        echo "Zenbakia ez dago 0 eta 3 artean";
        break;
}
?>
<?php 
    include 'footer.php';
?>
