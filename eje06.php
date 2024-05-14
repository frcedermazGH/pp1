<html>

<head>
    <meta charset="UTF-8">
    <title>Primera página PHP</title>
    <link href="styleEje06.css" rel="stylesheet" />
</head>

<body>
    <?php

    echo '<table>';
    echo '<td>X';

    for ($j = 1; $j <= 10; ++$j) {
        echo '<td>' . $j . '</td>';
    }
    echo '</td>';

    for ($j = 1; $j <= 10; ++$j) {
        echo '<tr>';
        $flag = true;

        for ($i = 1; $i <= 10; ++$i) {
            echo '<td>' . $j * $i . '</td>';
            if ($flag && $i == 1) {
                --$i;
                $flag = false;
            }
        }
        echo '</tr>';
    }

    echo '</table>';
    ?>
</body>

</html>