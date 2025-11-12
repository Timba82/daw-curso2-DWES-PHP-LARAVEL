<?php 

require __DIR__ . '/../vendor/autoload.php';


$httpClient = new \Goutte\Client();
$response = $httpClient->request('GET', 'http://www.seleccionbaloncesto.es/');
$alturas = [];
$edades = [];

$response->filter('[id*=_alturaTd]')->each(
    function ($node) use(&$alturas) {
        $txt = $node->text();
        $alturaNum = (float) str_replace(',', '.', $txt);
        $alturas[] = $alturaNum;
    }
);

$response->filter('[id*=_edadTd]')->each(
    function ($node) use(&$edades) {
        $edades[] = (int) $node->text();
    }
);

echo "La media de altura de los jugadores de los baloncestos es de " . number_format(array_sum($alturas) / count($alturas), 2) . " metros <br>";
echo "La media de edad de los jugadores de los baloncestos es de " . number_format(array_sum($edades) / count($edades), 0) . " años";