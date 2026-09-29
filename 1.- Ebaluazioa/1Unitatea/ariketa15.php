<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 15</title>
</head>
<body>
    <p>Otik 10era bitarteko zenbakiak: </p>
    <?php 
        $i = 0;
        do {
            if ($i != 10) {
                echo"$i-";
            }else {
                echo "$i";
            }
            $i++;
        }while ($i <=10)
        
    
    ?>
</body>
</html>