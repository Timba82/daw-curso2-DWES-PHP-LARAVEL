<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table, th, td {
            border: 1px solid;
            min-width: 45px;
        }
    </style>
</head>
<body>
    
    <form action="" method="post">
        <p>
            <label for="num">Introduce un número para ver su tabla de multiplicar: </label>
            <input type="text" name="num" id="num">
        </p>
    
        <button type="submit">Enviar</button>
    </form>
</body>
</html>


<?php 

    
    if (isset($_POST['num'])) {
        $tabla = "<table>
    <thead>
        <th>a</th>
        <th>*</th>
        <th>b</th>
        <th>=</th>
        <th>a*b</th>
    </thead>
    <tbody>";

        $num = $_POST['num'];

        for ($i=0; $i < 10; $i++) { 
            $tabla .= "<tr>" . 
            "<td>" . $num . "</td>" .
            "<td>*</td>" .
            "<td>" . $i . "</td>" .
            "<td>=</td>" .
            "<td>" . ($i * $num) . "</td>" 
            . "</tr>";
        }

        $tabla .= "</tbody></table>";

        echo $tabla;
    }
?>