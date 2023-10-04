<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WebApp - </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/f76c613aac.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1>WebApp - </h1>
    <!-- Logotipo -->
    <!-- GET: $_GET["varibale"] variables que se pasan como parametros via URl.
    tambien conocidos como cadena de consulta a traves de la URL.
    Cuando es la primera variable se separa con ? 
    las que le siguein a continuacion se separan  con & -->
    <div class="container-fluid">
        <h3 class="text-center py-3">Logo</h3>
    </div>
    <div class="container-fluid bg-light"></div>
    <ul class="nav nav-justified py-2 nav-pills">
        <?php if (isset($_GET["pagina"])) : ?>
            <?php if ($_GET["pagina"] == "inicio") : ?>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
                </li>
            <?php else : ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
                </li>
            <?php endif ?>
            <?php if ($_GET["pagina"] == "ingreso") : ?>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>
                </li>
            <?php else : ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
                </li>
            <?php endif ?>
            <?php if ($_GET["pagina"] == "registro") : ?>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
                </li>
            <?php else : ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=registro">Registro</a>
                </li>
            <?php endif ?>
            <?php if ($_GET["pagina"] == "salir") : ?>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pagina=salir">Salir</a>
                </li>
            <?php else : ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                </li>
            <?php endif ?>
        <?php else : ?>
            <li class="nav-item">
                <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?pagina=salir">Salir</a>
            </li>
        <?php endif ?>
    </ul>
    <div class="container-fluid">
        <div class="container py-5">
            <?php
            // isset() comprueba si una varibale es diferente a null, osea si tiene algo esa variable, en caso de tener algo regresa un true
            // y si no tiene regresa un false.

            if (isset($_GET["pagina"])) {
                if (
                    $_GET["pagina"] == "inicio" ||
                    $_GET["pagina"] == "ingreso" ||
                    $_GET["pagina"] == "registro" ||
                    $_GET["pagina"] == "salir" ||
                    $_GET["pagina"] == "editar"

                ) {
                    include "paginas/" . $_GET["pagina"] . ".php";
                } else {
                    include "paginas/error.php";
                }
            } else {
                include "paginas/registro.php";
            }
            ?>
        </div>
    </div>

</body>

</html>