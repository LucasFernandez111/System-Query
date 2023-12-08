<?php

include('../database/db.php')
    ?>

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

            <ul>
                <li><a href='../index.php'>Inicio</a></li>
                <li><a href="#">Elegir <i class="down"></i></a>
                
                    <ul>
                        <li><a href="alta.php">Alta</a></li>
                        <li><a href="baja.php">Baja</a></li>
                        <li><a href="modificacion.php">Modificación</a></li>
                    </ul>

                <li><a href="#">Listado Completo <i class="down"></i></a>
                
                    <ul>
                        <li><a href="lista.datos.php">Listado de Datos</a></li>
                        <li><a href="lista.tablas.php">Listado con tablas</a>
                          
                    </ul>
            </ul>
        </nav>

        <div class="d-flex justify-content-center align-items-center  ">
            <main class="w-75 " >


               
                <table class="table table-striped table-dark   ">
                    <thead class="text-white">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col" >ALUMNO</th>
                            <th scope="col">CORREO</th>
                            <th scope="col">CURSO</th>

                        </tr>

                    </thead>    
                    


                    <?php foreach ($conexion->query('SELECT * FROM t_alumnos_del_curso') as $row) {


?>
<tr class="text-white">
 <td>
                            <?php echo $row['id'] ?>
                        </td>
                        <td>
                            <?php echo $row['nombreDelUsuario'] ?>
                        </td>
                        <td>
                            <?php echo $row['mail'] ?>
                        </td>
                        <td>
                            <?php echo $row['codigoCurso'] ?>
                        </td>


                    </tr>

<?php
}
; ?>
                       


                </table>


                </form>

            </main>
        </div>
    </div>

</body>

</html>