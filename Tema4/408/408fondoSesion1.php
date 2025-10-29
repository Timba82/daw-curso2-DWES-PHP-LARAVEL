<?php
// 408fondoSesion1.php
session_start();

if (isset($_POST['color'])) {
    $_SESSION['colorFondo'] = $_POST['color'];
}

$color = $_SESSION['colorFondo'] ?? 'white';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Fondo con Sesión (1)</title>
</head>
<body bgcolor="<?= htmlspecialchars($color) ?>">
    <h2>Selecciona un color de fondo (guardado en sesión):</h2>

    <form method="POST">
        <select name="color" onchange="this.form.submit()">
            <option value="white"      <?= ($color==='white') ? 'selected' : '' ?>>Blanco</option>
            <option value="lightblue"  <?= ($color==='lightblue') ? 'selected' : '' ?>>Azul claro</option>
            <option value="lightgreen" <?= ($color==='lightgreen') ? 'selected' : '' ?>>Verde claro</option>
            <option value="lightyellow"<?= ($color==='lightyellow') ? 'selected' : '' ?>>Amarillo claro</option>
            <option value="lightpink"  <?= ($color==='lightpink') ? 'selected' : '' ?>>Rosa claro</option>
        </select>
    </form>

    <p>Tu color actual es: <strong><?= htmlspecialchars($color) ?></strong></p>

    <p><a href="408fondoSesion2.php">Ir a 408fondoSesion2.php</a></p>
</body>
</html>
