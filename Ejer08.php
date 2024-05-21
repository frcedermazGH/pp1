<!DOCTYPE html>
<html lang="en">

<head>
    <title>EJER08</title>
</head>

<body>
    <?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];

    if ($num1 > $num2) {
        echo $num1 . " es mayor que " . $num2;
    } else if ($num1 == $num2) {
        echo $num1 . " es igual que " . $num2;
    } else {
        echo $num1 . " es menor que " . $num2;
    }
    ?>
</body>

</html>