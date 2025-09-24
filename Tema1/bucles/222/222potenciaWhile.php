<?php 
    $base = 3;
    $exponente = 4;
    $resultado = 1; // empezamos en 1 porque cualquier número ^0 = 1

    $contador = 0;
    while ($contador < $exponente) {
        $resultado = $resultado * $base;

        $contador++;
    }
    

    echo "$base ^ $exponente = $resultado";

?>