<?php 


    $zenbakiak = [1, 2, 3, 4];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 12</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h1>Ariketa 12</h1>
    <table>
        <tr>
            <th></th>
            <?php 
                for ($i=0; $i < count($zenbakiak); $i++) {
                    echo "<th> $zenbakiak[$i] </th>";
                }

                
            ?>
        </tr> 
        
            <?php 
                for ($i=0; $i < count($zenbakiak); $i++) {
            ?>
                <tr>
                    <?php 
                        echo "<th> $zenbakiak[$i] </th>";
                        for($j=0; $j < count($zenbakiak); $j++){

                            echo "<td> $zenbakiak[$i] - $zenbakiak[$j] </td>";

                        }
                    
                    ?>
                </tr>  
            <?php } ?>
            
            
    </table>
</body>
</html>