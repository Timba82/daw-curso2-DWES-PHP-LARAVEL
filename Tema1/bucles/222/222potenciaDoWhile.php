<?php 
    $base = 3;
    $exponente = 4;
    $resultado = 1; // empezamos en 1 porque cualquier número ^0 = 1

    $contador = 0;
    
    do {
        $resultado = $resultado * $base;

        $contador++;
    } while ($contador < $exponente);
    
    

    echo "$base ^ $exponente = $resultado";

?>