<?php 
declare(strict_types=1);

/**
 * Función que averigüe si un número es par
 */
function esPar(int $num): bool {
    return $num % 2 === 0;
}

$numero = 5;
echo (esPar(4)) ? "El número $numero es par" : "El número $numero NO es par";

/**
 * Función que devuelva un array de tamaño
 */
function arrayAleatorio(int $tam, int $min, int $max): array {
    $arrayNumbers = [];

    for ($i=0; $i < $tam; $i++) { 
        array_push($arrayNumbers, rand($min, $max));
    }
    
    return $arrayNumbers;
}

$arrayGenerado = arrayAleatorio(5, 10, 100);
print_r($arrayGenerado);



function arrayPares(array $array): int {
    return count($array);
}

$arrayFrutas = ["Pera", "Manzana"];
$longitudArray = count($arrayFrutas);

echo "<br>El array tiene una longitud de $longitudArray";
?>