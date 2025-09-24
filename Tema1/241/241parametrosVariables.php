<?php 

function mayor(): int {
    $numeroParametros = func_get_args();
    $numMay = $numeroParametros[0];

    if (func_get_args() == 0) {
        echo "No has introducido parámetros";
    } else {
        

        foreach ($numeroParametros as $key => $value) {
            if ($value > $numMay) {
                $numMay = $value;
            }
        }
    }

    return $numMay;
}

$numeroMayor = mayor(100, 45, 78);

echo "El número mayor es $numeroMayor";

?>