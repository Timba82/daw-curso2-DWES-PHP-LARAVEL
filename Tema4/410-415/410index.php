<?php 
    include "includes/head.php"
?>

<body>
    <div class="main-container">
        <h4 class="text-center">Login</h4>
        <form action="411login.php" method="post">
            <?php if (!empty($error)) { ?>
                <div class="alert alert-danger">
                    <?= $error ?? '' ?>
                </div>
            <?php } ?>
            <div class="form-group">
                <label for="usuario">Usuario:</label>
                <input type="text" class="form-control" name="usuario" id="usuario" maxlength="50" required>
            </div>
    
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="text" class="form-control" name="password" id="password" maxlength="50" required>
            </div>
            <button type="submit" class="btn btn-primary mt-2" name="enviar" value="enviar">Entrar</button>
        </form>
    </div>
</body>
</html>


