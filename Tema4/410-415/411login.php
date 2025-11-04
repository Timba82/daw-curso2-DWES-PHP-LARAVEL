<?php

// Comprobamos si se ha enviado el formulario
if (isset($_POST['enviar'])) {
    // Guardamos los campos del formulario en varibales
    $usuario = $_POST['usuario'];
    $pass = $_POST['password'];
    
    // Validación de variables. Si alguno de los dos campos está vacío manejamos el error y redireccionamos al archivo index de nuevo
    if (empty($usuario) || empty($pass)) {
        $error = "Debes introducir correctamente un usuario o contraseña";
        include("410index.php");
    } else {
        // Comprobamos si los datos introducidos son correctos, si es así iniciamos sesión y redireccionamos a películas
        if ($usuario == "admin" && $pass == "admin") {
            $error = "";
            session_start();
            $_SESSION['usuario'] = $usuario;
            include("412peliculas.php");
        } else {
            // En el caso de error mostramos los errores
            $error = "Usuario o contraseña no váidos!";
            include("410index.php");
        }
    }
}

?>
