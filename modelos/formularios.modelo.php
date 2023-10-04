<?php
require_once "conexion.php";

class ModeloFormularios
{
    // Registro de lo que llegue del formulario

    static public function mdlRegistro($tabla, $datos)
    {
        // statement: es una declaracion de una instruccion de cualquien sitio se abrebia:
        //prepare() : prepara la sentencia SQL para ser ejecutada por el metodo
        // PDOStatement::execute(). La sentencia SQL puede contener cero o mas marcadores de
        // parametros con el nombre :name o signos de interrogacion (?) por los
        //cuales los valores reales seran sustituidos cuando la sentencia sea ejecutada
        //ayuda a prevenir iyecciones de sql eliminando la necesidad de entrecomillar
        // manualmente el parametro
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(`nombre`, `email`, `password`) 
        VALUES (:nombre, :email, :password)");

        // bindParam() vincula una variable de pHP a un  parametro de sustitucion con nombre o signo de
        // interrogacion a correspondiente de la sentencia sql que fue usada para preparar
        // la sentencia
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }
        // $stmt->close();
        $stmt = null;
    }
    //seleccionar registros
    static public function mdlSeleccionarRegistros($tabla, $item, $valor)
    {
        if ($item == null && $valor == null) {
            $stmt = Conexion::conectar()->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%Y') as f FROM $tabla
            ORDER BY id DESC");
            $stmt->execute();
            return $stmt->fetchAll(); // esto es para traer todos los registros
        } else {
            $stmt = Conexion::conectar()->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%Y') as f FROM $tabla 
            WHERE $item = :$item
            ORDER BY id DESC");
            $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();
        }

        // $stmt->close();
        $stmt = null;
    }
}
