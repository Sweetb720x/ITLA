<?php
$matricula = $_POST['matricula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$tecnico = $_POST['carrera'];
include('../conexion.php');

$sql = $bd->prepare("Insert into estudiantes values($matricula,'$nombre','$apellido','$tecnico');");
$sql->execute();

if($sql==true){
    echo "<script>window.alert('Docente agregado de manera exitosa');</script>";
    header('Location: ../Admin/adminAlumnos.php');
}else{
    echo "<script>window.alert('Ha ocurrido un error');</script>";
    header('Location: ../Admin/adminCrearAlumno.php');
}

?>
