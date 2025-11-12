<<<<<<< HEAD
<?php $archivo = basename(__FILE__); ?>

<div class="btn-group" role="group">
            <a href="412peliculas.php">
                <button type="button" class="btn btn-link">Peliculas</button>
            </a>
            <button 
                type="button" 
                class="btn btn-secondary"
                <?php 
                if ($archivo == '414series.php') {
                    
                } ?>    
            >Series</button>
</div>
=======
<?php
    $current = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); 
    $onPeliculas = ($current === '412peliculas.php');
    $onSeries    = ($current === '414series.php');
?>
<div class="d-flex justify-content-center mt-3">
  <div class="btn-group" role="group">

    <a
      <?= $onPeliculas ? '' : 'href="412peliculas.php"' ?>
      class="btn btn-secondary <?= $onPeliculas ? 'active disabled no-click' : '' ?>"
      >
      Películas
    </a>

    <a
      <?= $onSeries ? '' : 'href="414series.php"' ?>
      class="btn btn-secondary <?= $onSeries ? 'active disabled no-click' : '' ?>"
      >
      Series
    </a>

  </div>
</div>
>>>>>>> d967241735b67040818e9340f04ad70d9fd39066
