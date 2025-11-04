<?php 
    include "includes/head.php"
?>


<body>
    <div class="main-container">
        <div class="btn-group" role="group">
            <a href="412peliculas.php">
                <button type="button" class="btn btn-secondary">Peliculas</button>
            </a>
            <button type="button" class="btn btn-secondary" disabled>Series</button>
        </div>
        
        <h3 class="text-left">Bienvenido <?= $_SESSION['usuario'] ?></h3>
        
        <h1 class="text-center">Listado de series</h1>
        <ul class="list-group">
            <li class="list-group-item">El señor de los anillos</li>
            <li class="list-group-item">Los hermanos Bryan</li>
            <li class="list-group-item">Los vengadores serie</li>
        </ul>

        <a href="413logout.php">
            <button type="button" class="btn btn-danger mt-2">Cerrar sesión</button>
        </a>
    </div>
</body>
</html>