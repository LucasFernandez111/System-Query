<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../estilos.css">
</head>

<body>

    <div id="container">
        <nav>

            <ul>
                <li><a href='../index.php'>Inicio</a></li>
                <li><a href="#">Baja <i class="down"></i></a>
                    <!-- Primer Menu Desplegable -->
                    <ul>
                        <li><a href="alta.php">Alta</a></li>
                        <li><a href="modificacion.php">Modificación</a></li>
                    </ul>

                <li><a href="#">Consultas <i class="down"></i></a>
                    <!-- Primer Menu Desplegable -->
                    <ul>
                        <li><a href="lista.datos.php">Listado de Datos</a></li>
                        <li><a href="lista.completo.php">Listado Completo</a></li>
                        <li><a href="lista.tablas.php">Listado con tablas</a>
                            <!-- Segudo Menu Desplegable -->
                    </ul>
            </ul>
        </nav>

    </div>


    <!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card w-75 mx-auto mt-4 mb-4">

                    <div class="card-body">
                        <h2 class="text-center text-dark">Baja</h2>
                        <form action="">
                            <div class="form-group mb-3">
                                <input type="text" name="" class="form-control" required placeholder="Name" autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="" class="form-control" required placeholder="Email">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="" class="form-control" required placeholder="Curso">
                            </div>

                            <div class="form-group text-center">
                                <input type="submit" class="btn btn-primary w-100" value="ELIMINAR">
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

</body>

</html>