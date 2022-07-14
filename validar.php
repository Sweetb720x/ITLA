<?php

include 'conexion.php';
session_start();

$email = $_POST['email'];
$clave = $_POST['clave'];

$sql = $bd->prepare("select Email, Password, Permisos, Matricula from Usuario where Email = '$email' and Password = '$clave'");
$sql->execute();

if($sql == true){
}else{
    die("Ha ocurrido un error al insertar los datos\n");
}            
    
$user = $sql->FETCH(PDO::FETCH_OBJ);
$_SESSION['Email'] = $user->Email;
$_SESSION['Password'] = $user->Password;
$_SESSION['Permisos'] = $user->Permisos;
$_SESSION['Matricula'] = $user->Matricula;

if($user->Permisos === 1){
    header("Location:Admin/admin.php");
}
else if($user->Permisos === 0){
    header('Location:student.php');
}
else{
    header('Location:index.php');
}

//mysqli_close($bd);
?>