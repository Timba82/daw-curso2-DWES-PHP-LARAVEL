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
            private string $nombre;
            private string $apellido;
            private int $sueldo;
            private array $telefonos = [];

            /**
             * @param $nombre
             */
            public function __construct(string $nombre, string $apellido, int $sueldo) {
                $this->nombre = $nombre;
                $this->apellido = $apellido;
                $this->sueldo = $sueldo;
            }

            // Getters y setters
            public function getNombre(): string {
                return $this->nombre;
            }

            public function setNombre(string $nombre): void {
                $this->nombre = $nombre;
            }

            public function getApellido(): string {
                return $this->apellido;
            }

            public function setApellido(string $apellido): void {
                $this->nombre = $apellido;
            }

            public function getSalario(): int {
                return $this->sueldo;
            }

            public function setSalario(string $sueldo): void {
                $this->nombre = $sueldo;
            }

            public function getNombreCompleto(): string {
                return $this->getNombre() . ' ' . $this->getApellido();
            }

            public function debePagarImpuestos(): bool {
                return $this->getSalario() > 3333;
            }

            function anyadirTelefono(int $telefono) : void {
                array_push($this->telefonos, $telefono);
            }

            // Opcion 1
            public function listarTelefonos(): string {
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

        }


        $empleado1 = new Empleado("Francisco", "Gil", 6500);

        $pagarImpuestos = $empleado1->debePagarImpuestos() ? "Debe pagar impuestos" : "No Debe pagar impuestos";
        echo $empleado1->getNombreCompleto() . " " . $pagarImpuestos;

        $empleado1->anyadirTelefono(606987487);
        $empleado1->anyadirTelefono(607577488);

        echo "<br>Teléfonos con forearch: " . $empleado1->listarTelefonos();
        echo "<br>Teléfonos con implode: " . $empleado1->listarTelefonos2();
    
    ?>


</body>
</html>