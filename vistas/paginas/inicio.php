<?php

if (!isset($_SESSION["validarIngreso"])) {
    if ($_SESSION["validarIngreso"] != "ok") {
        echo '<script> window.location = "index.php?pagina=ingreso";</script>';
        return;
    } else {
        echo '<script> windows.location = "index.php?pagina=inicio";</script>';
        return;
    }
}

$usuarios = ControladorFormularios::ctrSeleccionarRegistros(null, null);


?>
<h2>Tabla de usuarios</h2>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($usuarios as $key => $value) : // hacemos recorrido al arreglo
        ?>
            <tr>
                <td> <?php echo ($key + 1) ?> </td>
                <td> <?php echo $value["nombre"] ?> </td>
                <td> <?php echo $value["email"] ?> </td>
                <td> <?php echo $value["f"] ?> </td>
                <td>
                    <div class="btn-group">
                        <a href='index.php?pagina=editar&id=' <?php echo $value["id"]; ?>><button class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button></a>
                        <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </div>
                </td>
            </tr>
        <?php endforeach ?>

    </tbody>
</table>