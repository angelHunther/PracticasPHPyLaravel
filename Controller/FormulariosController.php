<?php 

class FormularioController {

    static public function strRegistro()
    {
        if (isset($_POST['enviar'])) {
            $tabla = "registroUsuarios";
            $datos = array(
                "nombre" => $_POST['nombre'],
                "correo" => $_POST['correo'],
                "contra" => $_POST['pwd']
            );

            $respuesta = FormulariosModel::mdlRegistro($tabla, $datos);

            return $respuesta;

        }

    }

    static public function ctrSeleccionarRegistros(){

        $tabla = 'registroUsuarios';
        $objUsuarios = FormulariosModel::mdlObtenerRegistros($tabla);
        return $objUsuarios;
    }
}

?>