<?php
// 409formulario2.php
session_start();

function h($s){ return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8'); }

// Guardar lo recibido del paso 1 (si llega)
if ($_SERVER['REQUEST_METHOD']==='POST') {
  $_SESSION['nombre'] = $_POST['nombre'] ?? $_SESSION['nombre'] ?? '';
  $_SESSION['email']  = $_POST['email']  ?? $_SESSION['email']  ?? '';
  $_SESSION['url']    = $_POST['url']    ?? $_SESSION['url']    ?? '';
  $_SESSION['sexo']   = $_POST['sexo']   ?? $_SESSION['sexo']   ?? '';
}

// Precargar si ya existían
$convivientes = $_SESSION['convivientes'] ?? '';
$aficionesSel = $_SESSION['aficiones']    ?? [];
$menuSel      = $_SESSION['menu']         ?? [];
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>409 - Paso 2</title></head>
<body>
  <h2>Paso 2/2: Más información</h2>

  <form action="409formulario3.php" method="post">
    <label>Número de convivientes:
      <input type="number" name="convivientes" min="0" value="<?=h($convivientes)?>" required>
    </label><br><br>

    <fieldset>
      <legend>Aficiones (elige las que apliquen)</legend>
      <?php
        $aficiones = ['Deporte','Lectura','Cine','Viajar','Música','Videojuegos'];
        foreach ($aficiones as $a):
          $checked = in_array($a, $aficionesSel) ? 'checked' : '';
      ?>
        <label><input type="checkbox" name="aficiones[]" value="<?=h($a)?>" <?=$checked?>> <?=h($a)?></label>
      <?php endforeach; ?>
    </fieldset><br>

    <label>Menú favorito (selección múltiple con Ctrl/⌘):
      <select name="menu[]" multiple size="5">
        <?php
          $opciones = ['Italiano','Mexicano','Japonés','Vegetariano','Mediterráneo','Asiático'];
          foreach ($opciones as $op):
            $sel = in_array($op, $menuSel) ? 'selected' : '';
            echo '<option value="'.h($op).'" '.$sel.'>'.h($op).'</option>';
          endforeach;
        ?>
      </select>
    </label><br><br>

    <button type="submit">Enviar y ver resumen</button>
  </form>

  <p><a href="409formulario1.php">← Volver al paso anterior</a></p>
</body>
</html>
