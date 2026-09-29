<?php
$mezua = "";
$enviado = false;

if (isset($_POST["bidali"])) {
    $enviado = true;
    if (isset($_POST["erabiltzailea"]) && isset($_POST["pasahitza"])) {
        if (!empty($_POST["erabiltzailea"]) && !empty($_POST["pasahitza"])) {
            $erabiltzailea = $_POST["erabiltzailea"];
            $mezua = "Ongi etorri, " . $erabiltzailea . "!";
        } else {
            $mezua = "Erabiltzailea eta pasahitza behar ditugu.<br><a href='ariketa3.php'>Itzuli formulariora</a>";
        }
    } else {
        $mezua = "Erabiltzailea eta pasahitza behar ditugu.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 3</title>
</head>
<body>
    <h1>HTML Inprimakiak</h1>
    <?php if ($enviado) { ?>
        <p><?php echo $mezua; ?></p>
    <?php } else { ?>
        <form action="ariketa3.php" method="post">

            <label for="erabiltzailea">Erabiltzailea:</label>
            <br>
            <input type="text" name="erabiltzailea" id="erabiltzailea">
            <br>

            <label for="pasahitza">Pasahitza:</label>
            <br>
            <input type="password" name="pasahitza" id="pasahitza">
            <br>

            <input type="submit" name="bidali" value="Bidali">
        </form>
    <?php } ?>
</body>
</html>