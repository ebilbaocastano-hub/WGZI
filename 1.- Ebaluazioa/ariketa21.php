<?php 

    $ikasleak = ["Ane", "Jon", "Mikel", "June", "Unai", "Maialen"];
    $ikasleen_batura = count($ikasleak) ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 21</title>
</head>
<body>

    <?php 
    
        echo"Ikasle kopurua: $ikasleen_batura";
        echo"<br>";
        echo"Ikasleak: ";
        echo"<br>";

        foreach($ikasleak as $ikaslea){
            echo"$ikaslea";
            echo"<br>";
        }

        echo"<br>";

        if(in_array("Mikel", $ikasleak)){
            echo"Mikel klasera etorri da.";
        }else{
            echo"Mikel ez da klasera etorri.";
        }
        if (in_array("Nora", $ikasleak)){
            echo"Nora klasean dago.";
            echo"<br>";
        }else{
            echo"Nora ez dago klasean.";
            echo"<br>";
        }
    ?>
</body>
</html>