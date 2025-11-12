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