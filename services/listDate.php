<?php
include('../database/db.php');

if (isset($_POST['nameAlumno'])) {
    $name = $_POST['nameAlumno'];

    $query = "SELECT * FROM t_alumnos_del_curso where nombreDelUsuario='$name'";
    $result = mysqli_query($conexion, $query) or die(mysqli_error($conexion));

    var_dump($result); // Verifica que la consulta esté devolviendo resultados

    foreach ($result as $row) {
        var_dump($row); // Verifica los datos de cada fila

        $id = $row["id"];
        $alumno = $row["nombreDelUsuario"];
        $correo = $row["mail"];
        $codigoCurso = $row['codigoCurso'];

        echo "<tr class='text-white'>
        <td>$id</td>
        <td>$alumno</td>
        <td>$correo</td>
        <td>$codigoCurso</td>
        </tr>";
    }
}
?>