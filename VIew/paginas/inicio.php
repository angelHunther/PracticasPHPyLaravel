<?php
$objVerDatos  = FormularioController::ctrSeleccionarRegistros();
?>


<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>Num.Cliente</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Pasword</th>
            <th>Fecha</th>
            <th colspan="2">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($objVerDatos as $key => $valores) {
        ?>
            <tr>
                <td><?php echo $key +1?></td>
                <td><?php echo $valores['nombre'] ?></td>
                <td><?php echo $valores['correo'] ?></td>
                <td><?php echo $valores['contra'] ?></td>
                <td><?php echo $valores['fecha'] ?></td>
                <td>
                    <button class="btn btn-danger">Eliminar</button>
                    <button class="btn btn-success">Eliminar</button>
                </td>
            </tr>
        <?php  } ?>
    </tbody>
</table>