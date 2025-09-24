<?php
	// Esto es un comentario de una sóla línea
	$frase1 = "<p>Esta es la frase número 1 </p></br>";

	/**
	 * Esto es un comentario de bloque
	 */
	$frase2 = "<p>" . " Esta es la frase número 2" . "</p>" . "</br>";
	$frase3 = "<p>Esta es la frase número 3 </p></br>";
	// Forma 1 para definir una constante en PHP
	define("FRASE3", $frase3);

	// Mostramos los valores de las variables y constantes en las siguientes líneas
	echo $frase1;
	echo $frase2;
	echo FRASE3;
?>

