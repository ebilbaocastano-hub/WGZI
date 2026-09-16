<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 9</title>
</head>

<body>
    <?php
    $zbk = 4;
    ?>
    <h1>Aukera Desberdinak</h1>

    <p>Aldagaia: <?php echo $zbk ?></p>

    <p>Mezua:

        <?php
        switch ($zbk) {
            case 1:
                echo "$zbk berdin 1.";
                break;
            case 2:
                echo "$zbk berdin 2.";
                break;
            case 3:
                echo "$zbk berdin 3.";
                break;
            default:
                echo "$zbk ez da ez 1, ez 2 ezta 3.";
        }
        ?>
    </p>
</body>

</html>