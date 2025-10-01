<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        
        class Empleado {
            /**
             * En PHP 8 no es necesario declarar cada atributo de la clase
             */
            // private string $nombre;
            // private string $apellido;
            // private int $sueldo;
            private array $telefonos = [];
            const SUELDO_TOPE = 3333;

            /**
             * @param $nombre
             */
            public function __construct(
                private string $nombre, 
                private string $apellido, 
                private int $sueldo = 1000) {
                /**
                 * En PHP 8 no es necesario asignar los valores al instanciar una clase
                 */
                // $this->nombre = $nombre;
                // $this->apellido = $apellido;
                // $this->sueldo = $sueldo;
            }

            

            public function debePagarImpuestos(): bool {
                return  $this->sueldo > self::SUELDO_TOPE;
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

        }


        $empleado1 = new Empleado("Francisco", "Gil", 6500);

        $pagarImpuestos = $empleado1->debePagarImpuestos() ? "Debe pagar impuestos" : "No Debe pagar impuestos";
        

        $empleado1->anyadirTelefono(606987487);
        $empleado1->anyadirTelefono(607577488);

        echo "<br>Teléfonos con forearch: " . $empleado1->listarTelefonos();
        echo "<br>Teléfonos con implode: " . $empleado1->listarTelefonos2();
    
        $empleado1->vaciarTelefonos();
        echo "<br>";
        $empleado1->listarTelefonos();


        echo "<br> Impuestos";
        $empleado2 = new Empleado("Javier", "Santos");
        var_dump($empleado2);
        echo $empleado2->debePagarImpuestos() ? "Debe pagar impuestos" : "No Debe pagar impuestos";
        
    ?>


</body>
</html>