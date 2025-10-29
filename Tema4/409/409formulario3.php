<?php
// 409formulario3.php
session_start();

function h($s){ return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8'); }
function hArray($arr){ return array_map(fn($x)=>h($x), $arr ?? []); }

// Guardar datos del paso 2 si llegan
if ($_SERVER['REQUEST_METHOD']==='POST') {
  $_SESSION['convivientes'] = $_POST['convivientes'] ?? '';
  $_SESSION['aficiones']    = $_POST['aficiones']    ?? [];
  $_SESSION['menu']         = $_POST['menu']         ?? [];
}

// Vaciar sesión si lo piden
if (isset($_GET['reset'])) {
  $_SESSION = [];
  if (ini_get('session.use_cookies')) {
    $p = session_get_cookie_params();
    setcookie(session_name(), '', time()-42000, $p['path'],$p['domain'],$p['secure'],$p['httponly']);
  }
  session_destroy();
  header('Location: 409formulario1.php');
  exit;
}

// Leer todo
$datos = [
  'Nombre y apellidos' => $_SESSION['nombre'] ?? '',
  'Email'              => $_SESSION['email'] ?? '',
  'URL'                => $_SESSION['url'] ?? '',
  'Sexo'               => $_SESSION['sexo'] ?? '',
  'Convivientes'       => $_SESSION['convivientes'] ?? '',
  'Aficiones'          => implode(', ', hArray($_SESSION['aficiones'] ?? [])) ?: '—',
  'Menú favorito'      => implode(', ', hArray($_SESSION['menu'] ?? [])) ?: '—',
];
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>409 - Resumen</title></head>
<body>
  <h2>Resumen de datos</h2>

  <table border="1" cellpadding="6" cellspacing="0">
    <tbody>
      <?php foreach ($datos as $k=>$v): ?>
        <tr>
          <th style="text-align:left"><?=h($k)?></th>
          <td><?=h($v)?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <p>
    <a href="409formulario2.php">← Volver al paso anterior</a> |
    <a href="409formulario3.php?reset=1">Vaciar sesión y empezar de nuevo</a>
  </p>
</body>
</html>
