<h2 style="text-align: center">Registrate en la plataforma</h2>
<div class="d-flex justify-content-center text-center">

    <form class="p-5 bg-light" method="post">
        <div class="form-group">

            <label for="nombre">Nombre</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Escribe su nombre" id="nombre" name="registroNombre" />
            </div>
        </div>
        <div class="form-group">
            <label for="email">Correo electronico</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" placeholder="Escriba su email" id="email" name="registroEmail" />
            </div>

        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Escriba su contraseña" id="pwd" name="registroPassword" />
            </div>

        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" /> Recuerdame
            </label>
        </div>
        <?php
        $registro = ControladorFormularios::ctrRegistro();

        if ($registro == "ok") {
            echo '<script>
                    if(window.history.replaceState){
                        window.history.replaceState(null,null, window.location.href);
                    }
                </script>';
            echo '<div class = "alert alert-success">The user has been registered</div>
                <script>
                setTimeout(function(){
                    window.location = "index.php?pagina=ingreso";
                }, 3000);
                </script>';
        }

        if ($registro == "error") {
            echo '
                <script>
                    if(window.history.replaceState){
                        window.history.replaceState(null,null, window.location.href);
                    }
                </script>';
            echo '<div class = "alert alert-danger">¡Error! No special characters allowed.</div>
                <script>
                    setTimeout(function(){
                        window.location = "index.php?pagina=registro";
                    }, 3000);
                </script>';
        }
        ?>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>