<!-- 
#Index: 
# Es el parametro de las vistas del usaurio y tambien a travez de el enviaremos 
#las distintas acciones que evie el controlador -->
<?php
#Require establece que el cofigo del archivo invocado es reqeurido, 
#obligatorio para el funcionaiento del programa, por ellose establece eñ
#  archivo identifcicado

require_once("controladores/plantilla.controlador.php");
require_once "controladores/formularios.controlador.php";
require_once "modelos/formularios.modelo.php";
/* require_once("modelos/conexion.php");
// $conexion = Conexion::conectar();
// echo '<pre>';
// print_r($conexion);
// echo '<pre>';
*/

$plantilla = new ControladorPlantilla();
$plantilla->ctrTraerPlantilla();