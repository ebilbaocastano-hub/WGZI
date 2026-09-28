<?php
include 'header.php';
?>

<?php

$enviado = false;
$mezua = "";
$mezuaT = "";

if (isset($_POST["bidali"])) {
    if (isset($_POST["izenburua"])) {
        $enviado = true;
        if (!empty($_POST["izenburua"])) {
            $kolorea = $_POST["izenburua"];
            $mezua = "";
        } else {
            $mezuaT = "";
        }
    }
}

?>
<h1>Serieak Bilatu</h1>
<form action="bilatu.php" method="POST">

    <label for="izenburua">Seriearen Izenburua: </label><br>
    <input type="text" id="izenburua" name="izenburua" required><br>

    <input type="submit" value="Bidali">
</form>

<?php
include 'footer.php';
?>