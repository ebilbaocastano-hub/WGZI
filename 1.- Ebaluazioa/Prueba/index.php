<?php
    session_start();
    include 'header.php';
?>      
    <?php  
        
        if (isset($_SESSION["erabiltzailea"])) {
            $erabiltzailea = $_SESSION["erabiltzailea"];
            echo "<h2>Ongi etorri, $erabiltzailea!</h2>";
        }
    ?>
    <h1>Tx_Series</h1>

    <section class="serieak">

    <?php
        include 'datuak.php';
        global $series;
        
        foreach($series as $serie){
            echo "<article class='seriea'>";
            echo "<img src = ' " . $serie["irudia"] . " '>";
            echo "<h2>" . $serie["izenburua"] .  "</h2>";
            echo "<p>". $serie["generoa"] . "</p>";
            echo "<p>". $serie["denboraldiak"] . "</p>";
            echo "<p>". $serie["balorazioa"] . "</p>";
            if($serie["amaituta"]){
                echo "<p>Amaituta</p>"; 
            }else{
                echo "<p>Martxan</p>";
            }
            echo "</article>"; 
        }
    
    ?>
    </section>

<?php
    include 'footer.php';
?>