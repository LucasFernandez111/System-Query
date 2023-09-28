<?php
include('../database/db.php');


echo $_SESSION['message'];

if ($_POST['submit']) {

    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $curso = $_POST['curso'];

    $query = "INSERT INTO t_alumnos_del_curso(nombreDelUsuario,mail,codigoCurso) VALUES ('$nombre','$email','$curso')";
    $result = mysqli_query($conexion, $query);

    if (!$result) {
        die('Error en la Query Insert ERROR :' . mysqli_error($conexion));

    }

    $_SESSION['message'] = 'Alumno dado de alta';

    $_SESSION['message_type'] = 'success';


    header("Location: ../pages/alta.php");
}
?>