<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="col-md-12">

        <form action="" method="get">
            
            <div class="form-group">
            <label for="nombre">Nombre</label>
            <input class="form-control" type="text" id="nombre" name="nombre">
            </div>
        
            <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input class="form-control" type="text" id="apellidos" name="apellidos">
            </div>
    
            <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="text" id="email" name="email">
            </div>
        
            <div class="form-group">
            <label for="nacimiento">Año de nacimiento</label>
            <input class="form-control" type="text" id="nacimiento" name="nacimiento">
            </div>
        
            <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input class="form-control" type="text" id="telefono" name="telefono">
            </div>
            
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <?php

    if (isset($_GET)) {
         $table = "
            <table>
                <tr>
                    <td>Nombre</td>
                    <td>" . $_GET['nombre'] . "</td>
                </tr>
                <tr>
                    <td>Apellidos</td>
                    <td>" . $_GET['apellidos'] . "</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>" . $_GET['email'] . "</td>
                </tr>
                <tr>
                    <td>Nacimiento</td>
                    <td>" . $_GET['nacimiento'] . "</td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td>" . $_GET['telefono'] . "</td>
                </tr>
            </table>";
            
        echo $table;
    }  

    ?>
</body>
</html>





