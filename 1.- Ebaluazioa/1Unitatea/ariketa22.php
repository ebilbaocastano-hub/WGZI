<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 22</title>
</head>
<body>
    <?php 
        $frutak = array("laranja", "platanoa");
        echo"<b>Frutak:</b> ";
        echo"<br>";
        foreach($frutak as $fruta){
            echo"$fruta";
            echo"<br>";
        }
        echo"<b>Frutak:</b> ";
        echo"<br>";
        array_push($frutak, "limoia", "sagarra");
        foreach($frutak as $fruta){
            echo"$fruta";
            echo"<br>";
        }
    ?>
</body>
</html>