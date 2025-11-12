<?php 

require __DIR__ . '/vendor/autoload.php';

use Dwes\Monologos\HolaMonolog;

$monolog = new HolaMonolog(9);
$monolog->saludar();
$monolog->despedir();