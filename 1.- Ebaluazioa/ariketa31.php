<?php

    function aldagaiestatikoa(){
        static $zbk1 = 0;
        return $zbk1++;
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 31</title>
</head>
<body>
    <h1>Aldagai Estatikoak</h1>
    <?php  
    
        echo aldagaiestatikoa();
        echo"<br>";
        echo aldagaiestatikoa();
        echo"<br>";
        echo aldagaiestatikoa();
    ?>
</body>
</html>