<?php 
require_once 'Assets/conexion.php';

$objConexion = Conexion::conectar();

class FormulariosModel {

    static public function mdlRegistro($tabla, $datos)
    {
        #Parametro ocultos :nombre
        $objConexion = Conexion::conectar() -> prepare("INSERT INTO $tabla(nombre, correo, contra)
        VALUES (:nombre, :correo, :contra)");
        #bindParam
        $objConexion->bindParam(":nombre",$datos['nombre'],PDO::PARAM_STR);
        $objConexion->bindParam(":correo",$datos['correo'],PDO::PARAM_STR);
        $objConexion->bindParam(":contra",$datos['contra'],PDO::PARAM_STR);

        if($objConexion->execute()){
            return 'ok';
        }else {
            print_r(Conexion::conectar()->errorInfo());
        }

        $objConexion->close();
        $objConexion = null;

    }
}

?>