<?php
    $lista_desordenada = array();

    for ($i=0; $i < 50; $i++) { 
        $lista_desordenada[$i] = rand(0, 50);
    }

    echo 'Mostramos lista desordenada con números repetidos: <br>';
    foreach ($lista_desordenada as $key => $value) {
        echo $value . "<br>";
    }  
?>