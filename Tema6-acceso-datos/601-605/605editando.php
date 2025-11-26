<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Campeón</title>
    <link rel="stylesheet" 
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container py-5">

<?php

    include_once('database.php');
    
    $id = $_GET['id'] ?? null;
    
    if ($id) {
        $consulta = "SELECT * FROM `campeon` WHERE `id` = $id";
        $resultado = mysqli_query($con, $consulta);

        if ($resultado) {
            $campeon = mysqli_fetch_assoc($resultado);
        }
    }
    
?>

    <div class="card shadow container">
        <div class="card-header">
            <h3 class="mb-0">Editar Campeón</h3>
        </div>

        <div class="card-body">

            <form action="updateCampeon.php" method="POST">

                <!-- ID oculto -->
                <input type="hidden" name="id" value="<?= $campeon['id'] ?>">

                <!-- Nombre -->
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" 
                           class="form-control" 
                           id="nombre" 
                           name="nombre" 
                           value="<?= $campeon['nombre'] ?>" 
                           required>
                </div>

                <!-- Rol -->
                <div class="mb-3">
                    <label for="rol" class="form-label">Rol</label>
                    <input type="text" 
                           class="form-control" 
                           id="rol" 
                           name="rol" 
                           value="<?= $campeon['rol'] ?>" 
                           required>
                </div>

                <!-- Dificultad -->
                <div class="mb-3">
                    <label for="dificultad" class="form-label">Dificultad</label>
                    <select class="form-select" id="dificultad" name="dificultad" required>
                        <option value="Baja"  <?= $campeon['dificultad'] == 'Baja' ? 'selected' : '' ?>>Baja</option>
                        <option value="Media" <?= $campeon['dificultad'] == 'Media' ? 'selected' : '' ?>>Media</option>
                        <option value="Alta"  <?= $campeon['dificultad'] == 'Alta' ? 'selected' : '' ?>>Alta</option>
                    </select>
                </div>

                <!-- Descripción -->
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" 
                              id="descripcion" 
                              name="descripcion" 
                              rows="4" 
                              required><?= $campeon['descripcion'] ?></textarea>
                </div>

                <!-- Botones -->
                <div class="text-end">
                    <a href="604campeones.php" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>

            </form>

        </div>
    </div>

</div>

</body>
</html>
