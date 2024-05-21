<!DOCTYPE html>
<html lang="en">

<head>
    <title>EJER10</title>
</head>

<body>
    <?php
    class Empleado
    {
        private $nombre;
        private $sueldo;

        public function __construct($nombre, $sueldo)
        {
            $this->nombre = $nombre;
            $this->sueldo = $sueldo;
        }

        public function pagaImpuesto()
        {
            echo $this->nombre;
            if ($this->sueldo >= 3000) {
                echo " paga impuestos. Sueldo: " . $this->sueldo;
            } else {
                echo " no paga impuestos. Sueldo: " . $this->sueldo;
            }
        }
    }

    $empleado = new Empleado("Juan", 30000);
    $empleado->pagaImpuesto();

    echo "<br>";

    $empleado2 = new Empleado("Marta", 100);
    $empleado2->pagaImpuesto();

    ?>
</body>

</html>