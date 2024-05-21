<!DOCTYPE html>
<html lang="en">

<head>
    <title>EJER11</title>
</head>

<body>
    <?php
    class Persona
    {
        private $nombre;
        private $edad;

        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }

        public function getNombre()
        {
            return $this->nombre;
        }

        public function setEdad($edad)
        {
            $this->edad = $edad;
        }

        public function getEdad()
        {
            return $this->edad;
        }
    }

    class Empleado extends Persona
    {
        private int $sueldo;

        public function setSueldo($sueldo)
        {
            $this->sueldo = $sueldo;
        }

        public function getSueldo()
        {
            return $this->sueldo;
        }
    }

    $persona = new Persona();
    $persona->setNombre("Marta");
    $persona->setEdad("40");

    $empleado = new Empleado();
    $empleado->setNombre("Pedro");
    $empleado->setEdad("20");
    $empleado->setSueldo("100000");

    echo "Persona: " . $persona->getNombre() . "<br>";
    echo "Edad: " . $persona->getEdad() . "<br>";

    echo "<br>";

    echo "Empleado: " . $empleado->getNombre() . "<br>";
    echo "Edad: " . $empleado->getEdad() . "<br>";
    echo "Sueldo: " . $empleado->getSueldo();
    ?>
</body>

</html>