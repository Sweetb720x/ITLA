<?php
include("../conexion.php");

$sql = $bd->prepare("SELECT docentes.Nombre_docente, asignaturas.Nombre, selecciones.Dia, 
    selecciones.Creditos, selecciones.Cupo from ((docentes INNER JOIN 
    selecciones on selecciones.Id_docente = docentes.id) INNER JOIN 
    asignaturas on selecciones.Id_asignatura = asignaturas.Id);");
$sql->execute();

$numero = $sql->rowCount();
?>

<div class="container__Tabla">
    <div class="tabla__header">
        <h2>HORARIOS</h2>
        <a href="adminCrearHorario.php"><button>NUEVO HORARIO</button></a>
        <img src="../img/logoitla.JPG" class="avatar" alt="logo itla">
        <table>
            <thead>
                <tr>
                    <th>DOCENTE</th>
                    <th>ASIGNATURA</th>
                    <th>HORARIO</th>
                    <th>CREDITOS</th>
                    <th>CUPO</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($encontrados = $sql->FETCH(PDO::FETCH_ASSOC)){
                    ?>
                    <tr>
                        <td><?php echo $encontrados["Nombre_docente"]?></td>
                        <td><?php echo $encontrados["Nombre"]?></td>
                        <td><?php echo $encontrados["Dia"]?></td>
                        <td><?php echo $encontrados["Creditos"]?></td>
                        <td><?php echo $encontrados["Cupo"]?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>








