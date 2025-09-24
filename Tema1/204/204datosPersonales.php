<?php

    $table = "
    <table>
        <tr>
            <td>Nombre</td>
            <td>" . $_POST['nombre'] . "</td>
        </tr>
        <tr>
            <td>Apellidos</td>
            <td>" . $_POST['apellidos'] . "</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>" . $_POST['email'] . "</td>
        </tr>
        <tr>
            <td>Nacimiento</td>
            <td>" . $_POST['nacimiento'] . "</td>
        </tr>
        <tr>
            <td>Telefono</td>
            <td>" . $_POST['telefono'] . "</td>
        </tr>
    </table>";
	
    echo $table;

?>

