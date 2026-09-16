<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 13</title>
</head>
<body>
    <P>Hurrengo zenbaki hauek dira 5 eta 50 zenbakiaren artean dauden bikoitiak: </P>
    <?php 
       for ($i=5; $i <=50; $i++) {
        
        if ($i %2 == 0) {
                echo "$i";
        
            if ($i !=50) {
                echo ",";
            }
        }
       }    
    ?>
</body>
</html>