<?php
include 'header.php';
?>

<?php

$enviado = false;
$mezua = "";
$mezuaT = "";

if (isset($_POST["bidali"])) {
    $enviado = true;
    if (isset($_POST["izenburua"])) {
        if (!empty($_POST["izenburua"])) {
            $serie_izenburua = $_POST["izenburua"];
        } else {
            $mezuaT = "Ez da izenbururik sartu";
        }
    }
}

?>

<h1>Serieak Bilatu</h1>

    <form action="bilatu.php" method="POST">

        <label for="izenburua">Seriearen Izenburua: </label><br>
        <input type="text" id="izenburua" name="izenburua" required><br>

        <input type="submit" name="bidali" value="Bidali">
    </form>
<?php if ($enviado) { ?>
    <?php include 'datuak.php';
    global $series;
    $aurkituta = false;

    foreach ($series as $serie) {
        if (str_contains($serie['izenburua'], $serie_izenburua)) {
            $aurkituta = true;
            $egoera = $serie['amaituta'] ? "Bukatuta" : "Martxan";
            echo"<br>";
            echo "<article class='seriea'>";
                echo "<img src='" . $serie['irudia'] . "' alt='" . $serie['izenburua'] . "'>";
                echo "<h2>" . $serie['izenburua'] . "</h2>";
                echo "<p>Generoa: " . $serie['generoa'] . "</p>";
                echo "<p>Denboraldi kopurua: " . $serie['denboraldiak'] . "</p>";
                echo "<p>Balorazioa: " . $serie['balorazioa'] . "</p>";
                echo "<p>Egoera: " . $egoera . "</p>";
                echo "</article>"; 
        }
    }

    if ($aurkituta == false) {
        echo "<p>Ez da serierik aurkitu</p>";
    }

    ?>
<?php } else { ?>
        echo"Ez da izenbururrik bidali";
<?php } ?>

<?php
include 'footer.php';
?>