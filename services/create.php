<?php
include('../database/db.php');


if (!$_POST['name'] || !$_POST['email'] || !$_POST['curso']) {
    $_SESSION['message_input_vacio'] = 'Uno o varios de los campos esta vacio';

    header("Location: ../pages/alta.php");
}

if ($_POST['submit']) {

    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $curso = $_POST['curso'];

    $querySelect = "SELECT * FROM t_alumnos_del_curso where mail='$email'";
    $resultSelect = mysqli_query($conexion, $querySelect);

    $numRows = mysqli_num_rows($resultSelect);
    if ($numRows > 0) {
        $_SESSION['message_input_vacio'] = 'El Usuario ya se encuentra dado de alta';
        header("Location: ../pages/alta.php");

    } else {
        $queryInsert = "INSERT INTO t_alumnos_del_curso(nombreDelUsuario,mail,codigoCurso) VALUES ('$nombre','$email','$curso')";
        $resultInsert = mysqli_query($conexion, $queryInsert);

        $_SESSION['message'] = 'Alumno dado de alta';


        if (!$resultInsert) {
            die('Error en la Query Insert ERROR :' . mysqli_error($conexion));

        }




        header("Location: ../pages/alta.php");


    }










}
?>