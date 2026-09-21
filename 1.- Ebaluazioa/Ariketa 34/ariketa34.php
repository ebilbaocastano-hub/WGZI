<?php
    include 'header.php';
?>
<?php 

    $figurak = ["Harri", "Horri", "Ar"];

    // Txanda bakoitzeko irabazlea zein den erabakitzen du
    function irabazleaErabaki($jokalaria, $prog) {
        if ($jokalaria == $prog){
            return 0; // Berdinketa
        }
        if (($jokalaria == 0 && $prog == 2) || ($jokalaria == 1 && $prog == 0) || ($jokalaria == 2 && $prog == 1)) {
            return 1; // Jokalariak irabazi du txanda
        }
        return 2; // Makinak (programak) irabazi du txanda
    }

    // Jokoaren logika nagusia kontrolatzen du (3ra heldu arte)
    function jolastu($figurak) {
        $jokalariPuntuak = 0;
        $makinaPuntuak = 0;
        $txanda = 1;

        echo "<h2>Jokoa hasi da! (3 txanda irabazi behar dira)</h2>";

        // Begiztak jarraituko du norbaitek 3 puntu lortu arte
        while ($jokalariPuntuak < 3 && $makinaPuntuak < 3) {
            $jokalaria = rand(0, 2);
            $prog = rand(0, 2);
            
            $emaitza = irabazleaErabaki($jokalaria, $prog);
            
            echo "<h3>Txanda $txanda</h3>";
            
            if ($emaitza == 0) {
                echo "<p>Jokalariak {$figurak[$jokalaria]} - Makinak {$figurak[$prog]} -> <strong>Empatea egon da!</strong></p>";
            } elseif ($emaitza == 1) {
                echo "<p>Jokalariak {$figurak[$jokalaria]} - Makinak {$figurak[$prog]} -> <strong>Jokalariak irabazi du txanda!</strong></p>";
                $jokalariPuntuak++;
            } else {
                echo "<p>Jokalariak {$figurak[$jokalaria]} - Makinak {$figurak[$prog]} -> <strong>Makinak irabazi du txanda!</strong></p>";
                $makinaPuntuak++;
            }

            echo "<p><em>Emaitza: Jokalaria $jokalariPuntuak - Makina $makinaPuntuak</em></p><hr>";
            $txanda++;
        }

        // Jokoa amaitzean irabazle nagusia erakutsi
        if ($jokalariPuntuak == 3) {
            echo "<h2>🎉 ZORIONAK! Jokalariak irabazi du jokoa! 🎉</h2>";
        } else {
            echo "<h2>💻 MAKINAK IRABAZI DU JOKOA! 💻</h2>";
        }
    }

    // Funtzioari dei egiten diogu jokoa hasteko
    jolastu($figurak);

?>
<?php 
    include 'footer.php';
?>
