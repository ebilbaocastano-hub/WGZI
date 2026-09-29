<?php
session_start();

$username = "eder";
$password = "12345";
$mezua = "";


if (isset($_POST["bidali"])) {
    if (isset($_POST["erabiltzailea"]) && isset($_POST["pasahitza"])) {
        if (!empty($_POST["erabiltzailea"]) && !empty($_POST["pasahitza"])) {
            if ($_POST["erabiltzailea"] == $username && $_POST["pasahitza"] == $password) {
                $_SESSION["erabiltzailea"] = $_POST["erabiltzailea"];
                
                header("location: index.php");
                exit();
            } else {
                $mezua = "Erabiltzailea edo pasahitza ez dira zuzenak.";
            }
        } else {
            $mezua = "Erabiltzailea eta pasahitza behar ditugu.";
        }
    } else {
        $mezua = "Erabiltzailea eta pasahitza behar ditugu.";
    }
}


include 'header.php';
?>

<h1>Saioa hasi</h1>


<?php if (!empty($mezua)) { echo "<p>$mezua</p>"; } ?>

<form action="login.php" method="POST">

    <label for="erabiltzailea">Username: </label><br>
    <input type="text" id="erabiltzailea" name="erabiltzailea" required><br>

    <label for="pasahitza">Pasahitza: </label><br>
    <input type="password" id="pasahitza" name="pasahitza" required><br><br>

    <input type="submit" name="bidali" value="Bidali">
</form>

<?php
include 'footer.php';
?>