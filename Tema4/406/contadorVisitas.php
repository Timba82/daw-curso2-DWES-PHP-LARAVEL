<?php

$cookieName = 'accesos';
$ttl        = time() + 3600 * 24 * 30;           // 30 días
$self       = strtok($_SERVER['PHP_SELF'], '?'); // ruta del propio script
$cookiePath = dirname($self);                    // path consistente para la cookie

// Reinicio
if (isset($_GET['reset'])) {
    setcookie($cookieName, '', time() - 3600, $cookiePath); // borrar cookie con mismo path
    header("Location: $self"); // recargar a la misma página, sin suposiciones de carpeta
    exit;
}

// Contador
if (isset($_COOKIE[$cookieName])) {
    $accesosPagina = (int) $_COOKIE[$cookieName] + 1;
    setcookie($cookieName, (string) $accesosPagina, $ttl, $cookiePath);
    $mensaje = "Has visitado esta página <strong>$accesosPagina</strong> veces.";
} else {
    $accesosPagina = 1;
    setcookie($cookieName, (string) $accesosPagina, $ttl, $cookiePath);
    $mensaje = "Es tu primera visita a esta página. ¡Bienvenido!";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Contador de visitas con cookies</title>
</head>
<body>
  <h1>Contador de Visitas</h1>
  <p><?= $mensaje ?></p>

  <form method="get" action="<?php $self ?>">
    <button type="submit" name="reset" value="1">Reiniciar contador</button>
  </form>
</body>
</html>
