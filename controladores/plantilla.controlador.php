<?php
    Class ControladorPlantilla{
        #llamada a la plantilla
        public function ctrTraerPlantilla(){
            # include() es una funcion de php que se utiliza para invocar el archivo
            #que contiene codigo html o php
            include "vistas/plantilla.php";
        }
    }
