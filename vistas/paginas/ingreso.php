<h2 style="text-align: center">Acceder a la plataforma</h2>
<div class="d-flex justify-content-center text-center">

    <form class="p-5 bg-light" method="post">
        <div class="form-group">
            <label for="email">Correo electronico</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" placeholder="Escriba su email" id="email" name="ingresoEmail" />
            </div>

        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Escriba su contraseña" id="pwd" name="ingresoPassword" />
            </div>

        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" /> Recuerdame
            </label>
        </div>

        <?php
        $ingreso = new ControladorFormularios();
        $ingreso->ctrIngreso();
        ?>

        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
</div>