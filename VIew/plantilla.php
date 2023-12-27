<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/2f0e61d379.js" crossorigin="anonymous"></script>
</head>
</head>

<body>
    <div class="container-fluid">
        <h2 class="text-center py-3">Logo</h2>
    </div>
    <!--Botonera-->
    <div class="container">
        <ul class="nav nav-justified py-2 nav-pills bg-green">
            <li class="nav-item">
                <a class="nav-link" href="registro.html">Registro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ingreso.html">Ingreso</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="index.html">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Salir</a>
            </li>
        </ul>
    </div>

    <div class="container-fluid py-3">
        <div class="container">
            <?php
            include 'paginas/inicio.php';
            ?>
        </div>
    </div>
    <!--COntenidoInicio-->


</body>

</html>