<?php
// 402formulario.php
function h($s){ return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8'); }
function hArray($arr){ return array_map(fn($x)=>h($x), $arr ?? []); }

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: 402formulario.html');
  exit;
}

$nombre       = $_POST['nombre']        ?? '';
$email        = $_POST['email']         ?? '';
$url          = $_POST['url']           ?? '';
$sexo         = $_POST['sexo']          ?? '';
$convivientes = $_POST['convivientes']  ?? '';
$aficiones    = $_POST['aficiones']     ?? [];
$menu         = $_POST['menu']          ?? [];

$aficionesTxt = implode(', ', hArray($aficiones)) ?: '—';
$menuTxt      = implode(', ', hArray($menu)) ?: '—';

$datos = [
  'Nombre y apellidos' => $nombre,
  'Email'              => $email,
  'URL'                => $url,
  'Sexo'               => $sexo,
  'Convivientes'       => $convivientes,
  'Aficiones'          => $aficionesTxt,
  'Menú favorito'      => $menuTxt,
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>402 - Resumen</title>
  <style>
    body { font-family: system-ui, sans-serif; max-width: 720px; margin: 2rem auto; }
    table { border-collapse: collapse; width: 100%; }
    th, td { border: 1px solid #ccc; padding: .5rem .75rem; text-align: left; }
    th { width: 30%; background: #f7f7f7; }
  </style>
</head>
<body>
  <h2>Resumen de datos (402)</h2>
  <table>
    <tbody>
      <?php foreach ($datos as $k => $v): ?>
        <tr>
          <th><?= h($k) ?></th>
          <td><?= h($v) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <p><a href="402formulario.html">← Volver al formulario</a></p>
</body>
</html>
