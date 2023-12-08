<?php include('../database/db.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../estilos.css">
</head>

<body>
    <div id="container">
        <nav>
            <!-- ... contenido del menú ... -->
        </nav>
        <main>
            <div class="card w-50 p-3 mx-auto mt-4 mb-4">
                <form action='../services/listDate.php' method="POST">
                    <div class="form-group mb-3">
                        <input type="text" name="nameAlumno" class="form-control" placeholder="ALUMNO">
                    </div>
                    <div class="form-group mb-3">
                        <input class="btn btn-primary w-100" type="submit">
                    </div>
                </form>
            </div>

            <div class="d-flex justify-content-center align-items-center">
                <table class="table table-striped table-dark w-50">
                    <thead class="text-white">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">ALUMNO</th>
                            <th scope="col">CORREO</th>
                            <th scope="col">CURSO</th>
                        </tr>

                        <?php include('../services/listDate.php'); ?>

                    </thead>
                    <!-- ... contenido de la tabla ... -->
                </table>
            </div>
        </main>
    </div>
</body>

</html>