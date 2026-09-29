<?php
    include 'header.php';
?>  

<?php  

    include 'datuak.php';
    global $series;

    $serie_kantitatea = count($series);

    $serie_amaituta = 0;

    $serie_balorazio_batazbestekoa=0.0;
    $serie_guztien_balorazioa = 0.0;

    $serie_max_balorazioa = 0;
    $serie_max_izenburua = "";

    foreach($series as $serie){
        if($serie["amaituta"] == false){
            $serie_amaituta++; 
        }
        $serie_guztien_balorazioa += $serie["balorazioa"];
        if($serie["balorazioa"] > $serie_max_balorazioa){
            $serie_max_balorazioa = $serie["balorazioa"];
            $serie_max_izenburua = $serie["izenburua"];
        }
    }
    $serie_balorazio_batazbestekoa = $serie_guztien_balorazioa / count($series);
?>

<h1>Tx_Series</h1>

<h3>Serie kopurua</h3>
<br>
<?php echo"<p>$serie_kantitatea</p>"; ?>
<br>
<h3>Martxan dauden serieak</h3>
<br>
<?php echo"<p>$serie_amaituta</p>"; ?>
<br>
<h3>Bataz besteko balorazioa</h3>
<br>
<?php echo"<p>$serie_balorazio_batazbestekoa</p>"; ?>
<br>
<h3>Balorazio altuena</h3>
<br>
<?php echo"<p>$serie_max_izenburua - $serie_max_balorazioa</p>"; ?>

<?php
    include 'footer.php';
?>