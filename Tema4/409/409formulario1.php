<?php
// 409formulario1.php
session_start();

// Para precargar si el usuario vuelve atrás
$nombre = $_SESSION['nombre'] ?? '';
$email  = $_SESSION['email']  ?? '';
$url    = $_SESSION['url']    ?? '';
$sexo   = $_SESSION['sexo']   ?? '';
function h($s){ return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8'); }
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>409 - Paso 1</title></head>
<body>
  <h2>Paso 1/2: Datos básicos</h2>

  <form action="409formulario2.php" method="post">
    <label>Nombre y apellidos:
      <input type="text" name="nombre" value="<?=h($nombre)?>" required>
    </label><br><br>

    <label>Email:
      <input type="email" name="email" value="<?=h($email)?>" required>
    </label><br><br>

    <label>URL personal:
      <input type="url" name="url" value="<?=h($url)?>" placeholder="https://ejemplo.com">
    </label><br><br>

    <fieldset>
      <legend>Sexo</legend>
      <label><input type="radio" name="sexo" value="M" <?= $sexo==='M'?'checked':''; ?>> Masculino</label>
      <label><input type="radio" name="sexo" value="F" <?= $sexo==='F'?'checked':''; ?>> Femenino</label>
      <label><input type="radio" name="sexo" value="Otro" <?= $sexo==='Otro'?'checked':''; ?>> Otro</label>
    </fieldset><br>

    <button type="submit">Continuar →</button>
  </form>
</body>
</html>
