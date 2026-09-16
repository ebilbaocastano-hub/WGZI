<?php 

    $zbk = 30;

    $test = ($zbk >= 0 && $zbk <=10) ? "Zenbakia $zbk da" : "Zenbakia ez dago 0 eta 10en artean";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Gehiago Konprobatzen</h1>
    <p> <?php echo $test ?> </p>
</body>
</html>