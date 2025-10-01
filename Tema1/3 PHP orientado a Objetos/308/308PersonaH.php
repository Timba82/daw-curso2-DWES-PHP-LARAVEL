<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        class Persona2 {

            /**
             * @param $nombre
             */
            public function __construct(
                protected string $nombre, 
                protected string $apellido, 
                ) {}


            public static function toHtml(Persona2 $p): string {
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
        
        class Empleado extends Persona2 {            
            private array $telefonos = [];
            public static int $sueldoTope = 3333;

            /**
             * @param $nombre
             */
            public function __construct(string $nombre, string $apellido, private int $sueldo = 1000) {
                parent::__construct($nombre, $apellido);
            }

            // Setter
            public function setSueldoTope(int $sueldoTope): void {
                self::$sueldoTope = $sueldoTope;
            }

            public function getTelefonos(): array {
                return $this->telefonos;
            }

            public function getSueldoTope(): int {
                return self::$sueldoTope;
            }

            public function debePagarImpuestos(): bool {
                return  $this->sueldo > self::$sueldoTope;
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

        $empleado1 = new Empleado("Francisco", "Gil", 6500);
        $empleado1->anyadirTelefono(647897414);
        $empleado1->anyadirTelefono(678478579);
        echo $empleado1->toHtml($empleado1);
    ?>


</body>
</html>