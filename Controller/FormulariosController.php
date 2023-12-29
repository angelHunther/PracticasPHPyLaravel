<?php 

class FormularioController {

    public function strRegistro()
    {
        if (isset($_POST['enviar'])) {
            $nombre = $_POST['nombre'];
            echo $nombre;
        }

    }
}

?>