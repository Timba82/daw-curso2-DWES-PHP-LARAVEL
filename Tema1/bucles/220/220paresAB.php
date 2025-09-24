<?php
    $lista_desordenada = array();
    $inicio;
    $fin;

    if (isset($_POST)) {
        $inicio = $_POST['min'];
        $fin = $_POST['max'];

        for ($i=$inicio; $i < $fin; $i++) { 
        $lista_desordenada[$i] = rand(0, 50);
    }

        echo 'Mostramos lista desordenada con números repetidos: <br>';
        foreach ($lista_desordenada as $key => $value) {
            echo $value . "<br>";
        }  
    } else {
        echo "No has introducido correctamente min or max";
    }

    
?>