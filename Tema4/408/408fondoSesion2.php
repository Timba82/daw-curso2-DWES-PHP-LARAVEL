<?php
// 408fondoSesion2.php
session_start();

// Si piden vaciar la sesión, se destruye y se vuelve a la página anterior
if (isset($_GET['vaciar'])) {
    // Vaciar variables de sesión
    $_SESSION = [];
    // Destruir la sesión
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
    }
    session_destroy();
    header('Location: 408fondoSesion1.php');
    exit;
}

$color = $_SESSION['colorFondo'] ?? 'white';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Fondo con Sesión (2)</title>
</head>
<body bgcolor="<?= htmlspecialchars($color) ?>">
    <h2>Color actual guardado en sesión:</h2>
    <p><strong><?= htmlspecialchars($color) ?></strong></p>

    <p>
        <a href="408fondoSesion1.php">Volver a la página anterior</a> |
        <a href="408fondoSesion2.php?vaciar=1">Vaciar sesión y volver</a>
    </p>
</body>
</html>
