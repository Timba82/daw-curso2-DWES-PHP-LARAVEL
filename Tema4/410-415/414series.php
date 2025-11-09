<?php 
    include "includes/head.php"
?>


<body>
    <div class="main-container">
        <?php include "includes/menu.php" ?>

        <?php        
            if (isset($_COOKIE['series'])) {
                $listaSeries = json_decode($_COOKIE['series'], true);
            } else {
                $listaSeries = [
                    'El señor de los anillos',
                    'Los hermanos Bryan', 
                    'Los vengadores serie'
                ];
            }
        ?>
        
        <h1 class="text-center">Listado de series</h1>
        <ul class="list-group">
            <?php foreach ($listaSeries as $serie): ?>
                <li class="list-group-item"><?= $serie ?></li>
            <?php endforeach; ?>
        </ul>

       <?php include "includes/logout.php" ?>
    </div>
</body>
</html>