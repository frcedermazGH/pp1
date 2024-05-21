<html>

<head>
    <meta charset="utf-8" />
</head>

<body>
    <?php
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $sexo = $_POST["sexo"];
    $estadoCivil = $_POST["estadocivil"];
    $recibirNovedades = $_POST["novedades-acepto"] ?? false;
    $aceptaNormativa = $_POST["normativa-acepto"] ?? false;

    echo "Nombre: " . $nombre . "<br>";
    echo "Apellido: " . $apellido . "<br>";
    echo "Sexo: " . $sexo . "<br>";
    echo "Estado civil: " . $estadoCivil . "<br>";
    
    if ($recibirNovedades) {
        echo "Recibir información: Si" . "<br>";
    } else {
        echo "Recibir información: No" . "<br>";
    }

    if ($aceptaNormativa) {
        echo "Acepto condiciones: Si" . "<br>";
    } else {
        echo "Acepto condiciones: No" . "<br>";
    }
    ?>
</body>

</html>