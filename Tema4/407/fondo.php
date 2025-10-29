<?php
// Nombre de la cookie
$cookieName = "colorFondo";

// Si el usuario selecciona un color, lo guardamos en la cookie (1 día)
if (isset($_POST['color'])) {
    $color = $_POST['color'];
    setcookie($cookieName, $color, time() + 86400); // 24h = 86400 segundos
} else {
    // Si no hay selección, comprobamos si ya existe la cookie
    $color = $_COOKIE[$cookieName] ?? "white";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cambiar color de fondo</title>
</head>

<!-- Aplicamos el color guardado -->
<body bgcolor="<?= htmlspecialchars($color) ?>">
    <h2>Selecciona un color de fondo:</h2>

    <form method="POST">
        <select name="color" onchange="this.form.submit()">
            <option value="white" <?= $color == 'white' ? 'selected' : '' ?>>Blanco</option>
            <option value="lightblue" <?= $color == 'lightblue' ? 'selected' : '' ?>>Azul claro</option>
            <option value="lightgreen" <?= $color == 'lightgreen' ? 'selected' : '' ?>>Verde claro</option>
            <option value="lightyellow" <?= $color == 'lightyellow' ? 'selected' : '' ?>>Amarillo claro</option>
            <option value="lightpink" <?= $color == 'lightpink' ? 'selected' : '' ?>>Rosa claro</option>
        </select>
    </form>

    <p>Tu color actual es: <strong><?= htmlspecialchars($color) ?></strong></p>
</body>
</html>
