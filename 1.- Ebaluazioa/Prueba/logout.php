<?php 
    session_start();

    unset($_SESSION["erabiltzailea"]);
    // unset($_SESSION["pasahitza"])
    session_unset();

    session_destroy();
    
    header("location: index.php");
    exit();

?>