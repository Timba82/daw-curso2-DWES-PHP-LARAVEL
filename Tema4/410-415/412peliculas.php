<?php 
    include "includes/head.php"
?>


<body>
    <div class="main-container">
        <?php 
            include "includes/menu.php"
        ?>

        

        <?php if (isset($_SESSION['usuario'])): ?>
        
            <h3 class="text-left">Bienvenido <?= $_SESSION['usuario'] ?></h3>

        <?php endif; ?>

        <?php        
            if (isset($_COOKIE['peliculas'])) {
                $listaPeliculas = json_decode($_COOKIE['peliculas'], true);
            } else {
                $listaPeliculas = [
                    'El quinto elemento', 
                    'Matrix', 
                    'Los puentes de Madison'
                ];
            }
        ?>
        
        <h1 class="text-center">Peliculas</h1>
        <ul class="list-group">
            <?php foreach ($listaPeliculas as $pelicula): ?>
                <li class="list-group-item"><?= $pelicula ?></li>
            <?php endforeach; ?>
        </ul>

        <?php include "includes/logout.php" ?>
    </div>
</body>
</html>