<?php 
    $base = 3;
    $exponente = 4;
    $resultado = 1; // empezamos en 1 porque cualquier número ^0 = 1

    for ($i = 1; $i <= $exponente; $i++) {
        $resultado = $resultado * $base; // acumulamos el producto
    }

    echo "$base ^ $exponente = $resultado";

?>