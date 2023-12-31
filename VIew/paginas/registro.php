
<div class="d-flex justify-content-center text-center">
    <form class="p-5 bg-light" method="POST">
        <div class="form-group">
            <label for="email">Nombre:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa-solid fa-user"></i>
                    </span>
                    <input type="text" class="form-control" id="nombre" placeholder="Escribe tu nombre" name="nombre">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="pwd">Correo:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa-solid fa-envelope"></i> </span>
                    <input type="email" class="form-control" id="correo" placeholder="Enter email" name="correo">
                </div>
            </div>

        </div>
        <div class="form-group">
            <label for="pwd">Contraseña:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa-solid fa-key"></i> </span>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>
            </div>
        </div>
        <?php 

        //Metodo no estatico
        // $objUsuario = new FormularioController();
        // $objUsuario->strRegistro();

        //Metodo estatico
        $objUsuario = FormularioController::strRegistro();
        if ($objUsuario == 'ok'){
            echo '<script>
             if(window.history.replaceState){
                window.history.replaceState(null, null, window.location.href);
             }
            
            </script>';
            echo '<div class ="alert alert-success">El usuario a sido registrado</div>';
        }
        ?>
        <button type="submit" name="enviar" class="btn btn-primary">Registrate</button>
    </form>
</div>