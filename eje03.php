<html>

<head>
    <meta charset="UTF-8">
    <title>Primera página PHP</title>
</head>

<body>
    <?php

    $pais = [
        "espana" =>
            [
                "nombre" => "España",
                "lengua" => "Castellano",
                "moneda" => "Euro"
            ],
        "usa" =>
            [
                "nombre" => "USA",
                "lengua" => "Inglés",
                "moneda" => "Dolar"
            ]
    ];

    echo $pais["espana"]["moneda"]

        ?>
</body>

</html>