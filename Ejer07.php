<!DOCTYPE html>
<html lang="en">

<head>
    <title>EJER07</title>
</head>

<body>
    <?php
    function calcularVolumen($radio, $altura)
    {
        $pi = 3.1416;
        return $pi * $radio * $radio * $altura;
    }

    $resultado = calcularVolumen(5, 10);
    echo "El resultado es " . $resultado;
    ?>
</body>

</html>