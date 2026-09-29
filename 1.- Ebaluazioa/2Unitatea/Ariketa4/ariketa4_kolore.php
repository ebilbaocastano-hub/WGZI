<?php 
$enviado = false;
$mezua = "";
$mezuaT = "";


if (isset($_POST["koloreak"])) {
    $enviado = true;
    if (!empty($_POST["koloreak"])) {
        $kolorea = $_POST["koloreak"];
        $mezua = "Aukeratutako kolorea $kolorea izan da.";
    } else {
        $mezuaT = "Ez da kolorea jaso";
    }
} 
?>
<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 4</title>
</head>
<body>

    <?php if ($enviado){ ?>
        <?php if (!empty($kolorea)){ ?>
            <h1 style="background-color: <?php echo $kolorea; ?>;">
                <?php echo $mezua; ?>
            </h1>
        <?php } else { ?>
            <h1><?php echo $mezuaT; ?></h1>
        <?php } ?>
    <?php } ?>

</body>
</html>