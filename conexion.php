<?php

$usuario = "root";
$clave = "admin123";
$dbnombre = "universidad";

try{
    $bd = new PDO(
        "mysql:host=localhost;
        dbname=".$dbnombre,
        $usuario,
        $clave
    );
}catch(Exception $e){
    echo "Conexion fallida";
}


?>