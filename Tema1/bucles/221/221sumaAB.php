<?php 

    if (isset($_POST)) {
        $inicio = $_POST['min'];
        $fin = $_POST['max'];

        $sum = 0;
        for ($i= $inicio; $i < $fin; $i++) { 
            $sum += $i;
        }
    
        echo "La suma del 1 al 10 es: " . $sum;
    }
?>
