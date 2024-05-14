<html>

<head>
    <meta charset="UTF-8">
    <title>Primera página PHP</title>
</head>

<body>
    <?php
    $cad1 = "Comer algas";
    $cad2 = "es realmente sano";
    $cad3 = $cad1 . ' ' . $cad2;

    echo $cad3 . '<br>';
    echo "Posicion cadena algas" . ': ' . strpos($cad3, 'algas')
        ?>
</body>

</html>