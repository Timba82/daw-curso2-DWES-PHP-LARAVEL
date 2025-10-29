<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    

        class Persona3 {

            /**
             * @param $nombre
             */
            public function __construct(
                protected string $nombre, 
                protected string $apellido,
                protected int $edad
                ) {}


            public static function toHtml(Persona3 $p): string {
                if ($p instanceof Empleado) {
                    $telefonos = $p->getTelefonos();
                
                    $html = '<h1>'. $p->__toString() . '</h1><br>' . 
                    '<ol>';
                    foreach ($telefonos as $telefono) {
                        $html .= '<li>' . $telefono . '</li>';
                    }
                    $html .= '</ol>';

                    return $html;
                } else {
                    return '';
                }
            }

        }
        
        class Empleado extends Persona3 {            
            private array $telefonos = [];
            public static int $sueldoTope = 3333;

            /**
             * @param $nombre
             */
            public function __construct(string $nombre, string $apellido, int $edad, private int $sueldo = 1000) {
                parent::__construct($nombre, $apellido, $edad);
            }

            // Setter
            public function setSueldoTope(int $sueldoTope): void {
                self::$sueldoTope = $sueldoTope;
            }

            public function setEdad(int $edad): void {
                $this->$edad = $edad;
            }

            public function getTelefonos(): array {
                return $this->telefonos;
            }

            public function getSueldoTope(): int {
                return self::$sueldoTope;
            }

            public function debePagarImpuestos(): bool {
                return  $this->sueldo > self::$sueldoTope && $this->edad > 21;
            }

            function anyadirTelefono(int $telefono) : void {
                array_push($this->telefonos, $telefono);
            }

            // Opcion 1
            public function listarTelefonos(): string {
                if (empty($this->telefonos)) {
                    return '';
                }

                $todosTelefonos = '';
                foreach ($this->telefonos as $telefono) {
                    $todosTelefonos .= $telefono . ', ';
                }

                return rtrim($todosTelefonos, ', ');
            }

            // Opcion 2: Con implode
            public function listarTelefonos2(): string {
                return implode(", ", $this->telefonos);
            }

            public function vaciarTelefonos(): void {
                $this->telefonos = [];
            }

            public function __toString() {
                return "Empleado{" . "nombre='" . $this->nombre . "', " . "apellidos='" . $this->apellido . "'}";
            }

        }

        echo $_SERVER["PHP_SELF"]."<br>"; // /u4/401server.php
        echo $_SERVER["SERVER_SOFTWARE"]."<br>"; // Apache/2.4.46 (Win64) OpenSSL/1.1.1g PHP/7.4.9
        echo $_SERVER["SERVER_NAME"]."<br>"; // localhost

        echo $_SERVER["REQUEST_METHOD"]."<br>"; // GET
        echo $_SERVER["REQUEST_URI"]."<br>"; // /u4/401server.php?heroe=Batman
        echo $_SERVER["QUERY_STRING"]."<br>"; // heroe=Batman
        

        $empleado1 = new Empleado("Francisco", "Gil", 6500);
        $empleado1->anyadirTelefono(647897414);
        $empleado1->anyadirTelefono(678478579);
        echo $empleado1->toHtml($empleado1);
    ?>


</body>
</html>