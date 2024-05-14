<html>

<head>
    <meta charset="UTF-8">
    <title>Primera página PHP</title>
</head>

<body>
    <?php

    echo "while: <br>";
    $i = 1;
    while ($i <= 10) {
        echo $i . '<br>';
        ++$i;
    }

    echo '<br>';

    echo "for: <br>";
    for ($j = 1; $j <= 10; ++$j) {
        echo $j . '<br>';
    }
    ?>
</body>

</html>