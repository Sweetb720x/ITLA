<?php
include('../conexion.php');

$sql = $bd-> prepare("SELECT estudiantes.Matricula, estudiantes.Nombre, estudiantes.Apellido,
carreras.Tecnico from estudiantes inner join carreras on estudiantes.Carrera=carreras.Id
WHERE Nombre like lower('%".$_POST["buscar"]."%');");
$sql-> execute();

$numero = $sql->rowCount();

?>

<div class="container__Tabla">
    <div class="tabla__header">
        <h2>ALUMNOS</h2>
        <a href="adminCrearAlumno.php"><button>NUEVO ALUMNO</button></a>
        <img src="../img/logoitla.JPG" class="avatar" alt="logo itla">
        <table>
            <thead>
                <tr>
                    <th>MATRICULA</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>CARRERA</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($encontrados = $sql->FETCH(PDO::FETCH_ASSOC)){
                ?>
                <tr>
                    <td><?php echo $encontrados["Matricula"];?></td>
                    <td><?php echo $encontrados["Nombre"];?></td>
                    <td><?php echo $encontrados["Apellido"];?></td>
                    <td><?php echo $encontrados["Tecnico"];?></td>
                </tr>
                <?php 
                    } 
                ?>
            </tbody>
        </table>
        <div class="tabla__footer">
            <p><?php print $numero?> alumnos</p>
        </div>
    </div>
</div>