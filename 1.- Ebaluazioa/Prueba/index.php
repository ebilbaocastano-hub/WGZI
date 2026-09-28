    <?php
        include 'header.php';
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
                echo "<p>". $serie["amaituta"] . "</p>"; 
                echo "</article>"; 
            }
        
        ?>
        </section>

    <?php
        include 'footer.php';
    ?>  