<?php 
    include "includes/head.php"
?>


<body>
    <div class="main-container">
        
        <h3 class="text-left">Bienvenido <?= $_SESSION['usuario'] ?></h3>
        
        <h1 class="text-center">Peliculas</h1>
        <ul class="list-group">
            <li class="list-group-item">El quinto elemento</li>
            <li class="list-group-item">Matrix</li>
            <li class="list-group-item">Los puentes de Madison</li>
        </ul>

        <a href="413logout.php">
            <button type="button" class="btn btn-danger mt-2">Salir de la sesión</button>
        </a>
    </div>
</body>
</html>