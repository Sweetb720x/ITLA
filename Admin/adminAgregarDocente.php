<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
include ('../conexion.php');

//$sql = $bd->prepare("INSERT into docentes values ('$nombre','$apellido','$email');");
$sql = $bd->prepare("INSERT INTO docentes values (null,'$nombre','$apellido','$email');");
$sql->execute();

if($sql==true){
    echo "<script>window.alert('Docente agregado de manera exitosa');</script>";
    header('Location: ../Admin/adminDocentes.php');
}else{
    echo "<script>window.alert('Ha ocurrido un error');</script>";
    header('Location: ../Admin/adminCrearDocente.php');
}

?>
