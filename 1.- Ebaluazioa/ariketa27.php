<?php 

    $desio_zerrenda = ["Brasil", "Canada", "Japon", "Kenia", "Noruega"];

    // Añade "Australia" y "Egipto" al final del array $desio_zerrenda
    array_push($desio_zerrenda, "Australia", "Egipto");

    $bisitatuak_2025 = array('Kenia', 'Noruega');
    $bisitatuak_2026 = array('Portugal', 'Cavo Verde');

    // Unifica los dos arrays de países visitados en un solo array
    $bisitatuak_guztiak = array_merge($bisitatuak_2025, $bisitatuak_2026);

    // Compara ambos arrays y elimina de $desio_zerrenda los países que ya están en $bisitatuak_guztiak
    $desio_zerrenda = array_diff($desio_zerrenda,$bisitatuak_guztiak);

    // Ordena los países restantes de la lista de deseos en orden alfabético (A-Z)
    sort($desio_zerrenda);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 27</title>
</head>
<body>
    <h1>Bidai Deseo Zerrenda</h1>
    <p><strong>Hiriak: </strong></p>
    <?php 

        print_r($desio_zerrenda);
        echo"<br>";
        
        foreach($desio_zerrenda as $hiriak){
            echo"$hiriak";
            echo"<br>";
        }
    
    ?>
</body> 
</html>