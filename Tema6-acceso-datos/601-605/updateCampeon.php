<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once('database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $rol = $_POST['rol'];
    $dificultad = $_POST['dificultad'];
    $descripcion = $_POST['descripcion'];

    $consulta = "UPDATE `campeon` SET `nombre`='$nombre',`rol`='$rol',`dificultad`='$dificultad',`descripcion`='$descripcion' WHERE id=$id";

    $resultado = mysqli_query($con, $consulta);
    echo mysqli_error($con);

    if ($resultado) {
        header('Location: 604campeones.php');
        exit();
    }

}


