<?php
if (isset($_POST['btnSubir']) && $_POST['btnSubir'] === 'Subir') {

    // Comprobar que se ha subido el archivo correctamente
    if (isset($_FILES['archivo']) && is_uploaded_file($_FILES['archivo']['tmp_name'])) {

        $nombre = $_FILES['archivo']['name'];
        $tmp = $_FILES['archivo']['tmp_name'];
        $destino = "./uploads/" . basename($nombre);

        // Crear carpeta si no existe
        if (!file_exists('uploads')) {
            mkdir('uploads', 0777, true);
        }

        if (move_uploaded_file($tmp, $destino)) {
            echo "<p><strong>Archivo subido con éxito:</strong> $nombre</p>";


            // Obtener extensión en minúsculas
            $ext = strtolower(pathinfo($nombre, PATHINFO_EXTENSION));

            // Si es imagen (jpg, jpeg, png, gif, webp), mostrar vista previa
            $permitidas = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
            $anchura = (int)($_POST['anchura'] ?? 0);
            $altura  = (int)($_POST['altura']  ?? 0);

            // Valores mínimos por si vienen vacíos
            $anchura = $anchura > 0 ? $anchura : 300;
            $altura  = $altura  > 0 ? $altura  : 200;

            if (in_array($ext, $permitidas, true)) {
                echo "<p>Vista previa de la imagen:</p>";
                $src = htmlspecialchars($destino, ENT_QUOTES, 'UTF-8');
                echo "<img src='$src' width='$anchura' height='$altura' alt='Imagen subida'>";
            } else {
                echo "<p style='color:orange;'>El archivo no es una imagen admitida (jpg, jpeg, png, gif, webp).</p>";
            }

            // Mostrar los valores de anchura y altura introducidos
            echo "<p><strong>Anchura:</strong> $anchura px</p>";
            echo "<p><strong>Altura:</strong> $altura px</p>";

        } else {
            echo "<p style='color:red;'>Error al mover el archivo.</p>";
        }

    } else {
        echo "<p style='color:red;'>No se ha subido ningún archivo.</p>";
    }

} else {
    echo "<p style='color:red;'>Acceso no válido. Usa el formulario.</p>";
}
?>
