<?php
$id = $_GET['id'];

include '../conexion.php';

$sql = $bd->prepare("DELETE FROM docentes WHERE id = $id;");
$sql->execute();

if($sql==true){
    header('Location: ../Admin/adminDocentes.php');
}
else{
    echo "Ha ocurrido un error";
}

?>