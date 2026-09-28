<?php
// Balidatzen dugu datuak badauden, badaude bariableak ezarri eta bestela hutsik utzi
if (isset($_POST["izena"])) {
    $izena = $_POST["izena"];
} else {
    $izena = "";
}
if (isset($_POST["abizena"])) {
    $abizena = $_POST["abizena"];
} else {
    $abizena = "";
}
if (isset($_POST["email"])) {
    $email = $_POST["email"];
} else {
    $email = "";
}

// Balidatzen dugu datuak ez daudela hutsik
if (empty($_POST["izena"])) {
    echo "Ez duzu izena sartu";
}
elseif (empty($_POST["abizena"])) {
    echo "Ez duzu abizena sartu";
}
elseif (empty($_POST["email"])) {
    echo "Ez duzu email-a sartu";
}

echo "<h1>Ongi etorri $izena $abizena. Zure email-a $email</h1>";

?>