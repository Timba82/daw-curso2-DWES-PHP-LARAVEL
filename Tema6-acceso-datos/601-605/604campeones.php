<?php
ob_start();

ini_set('display_errors', 1);

include_once('database.php');

// Si es un POST para borrar
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_id'])) {

    $id = $_POST['delete_id'];
    $consultaDelete = "DELETE FROM campeon WHERE id=$id";
    $queryResult = mysqli_query($con, $consultaDelete);

    header("Content-Type: application/json");

    echo json_encode([
        "success" => (bool)$queryResult,
        "id" => $id,
        "sql_error" => mysqli_error($con)
    ]);

    ob_end_flush();
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
<?php

    $consulta = "SELECT * FROM `campeon`";
    $listaCampeones = mysqli_query($con, $consulta);

?>

    <div class="list-group shadow container" id="container-list">

        <?php if ($listaCampeones): ?>
            <?php foreach ($listaCampeones as $campeon): ?>

                <div class="list-group-item d-flex justify-content-between align-items-center">
                    
                    <div>
                        <h5 class="mb-1"><?= $campeon['nombre'] ?></h5>
                        <small class="text-muted"><?= $campeon['rol'] ?></small>
                    </div>

                    <div>
                        <a 
                            href="605editando.php?id=<?php echo $campeon['id']; ?>" 
                            class="btn btn-sm btn-primary me-2">
                            Editar
                        </a>
                        <button data-id="<?= $campeon['id'] ?>" data-name="<?= $campeon['nombre'] ?>" class="btn btn-sm btn-danger btn-borrar">Borrar</button>
                    </div>

                </div>

            <?php endforeach; ?>
        <?php endif; ?>

    </div>

    <script>
        document.getElementById("container-list").addEventListener('click', async (evt) => {
            // Para comprobar que si que hemos clickado en no de los botones de borrado
            const btnBorrar = evt.target.closest('.btn-borrar');
            if (!btnBorrar) return;
            
            const { id, name } = evt.target.dataset;
            
            const eliminar = confirm(`¿Quieres eliminar al campeón ${name}?`);

            if (!eliminar) return;
            
            const response = await fetch("604campeones.php", {
                method: 'POST',
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: `delete_id=${id}`
            });

            const dataResponse = await response.json();
            if (dataResponse.success) {
                alert(`¡Campeón eliminado satisfactoriamente!`);
                location.reload();
            } else {
                alert(`Error al eliminar al campeón`);
            }
        });
    </script>

</body>
</html>