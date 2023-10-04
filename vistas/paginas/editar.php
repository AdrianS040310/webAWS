<?php
if (isset($_GET["id"])) {
    $item = "id";
    $valor = $_GET["id"];

    $usuario = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);
    echo "<pre>";
    print_r($usuario);
    echo "</pre>";
}
?>

<h2 style="text-align: center">Editar usuario</h2>
<div class="d-flex justify-content-center text-center">

    <form class="p-5 bg-light" method="post">
        <div class="form-group">

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Escribe su nombre" id="nombre" name="actualizarNombre" />
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" placeholder="Escriba su email" id="email" name="actualizarEmail" />
            </div>

        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Escriba su contraseña" id="pwd" name="actualizarPassword" />
            </div>

        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" /> Recuerdame
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>