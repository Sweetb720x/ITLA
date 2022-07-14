<?php
include('../conexion.php');

$sql = $bd->prepare("SELECT * from docentes where Nombre like lower('%".$_POST["buscar"]."%')");
$sql->execute();

$numero = $sql->rowCount();
?>

<div class="container__Tabla">
            <div class="tabla__header">
                <h2>DOCENTES</h2>
                <a href="adminCrearDocente.php"><button>NUEVO DOCENTE</button></a>
                <img src="../img/logoitla.JPG" class="avatar" srcset="">
                    <table>
                        <thead>
                            <tr>
                                <th>NOMBRE</th>
                                <th>APELLIDO</th>
                                <th>CORREO</th>
                                <th>ELIMINAR</th>
                             </tr>
                        </thead>
                            <tbody>

<?php
while($encontrados = $sql->FETCH(PDO::FETCH_ASSOC)){
    ?>
                            <tr>
                                <td><?php echo $encontrados['Nombre']?></td>
                                <td><?php echo $encontrados['Apellido']?></td>
                                <td><?php echo $encontrados['Correo']?></td>
                                <td><a href="adminEliminarDocente.php?id=<?php echo $encontrados['id']?>"> <i class="las la-user-slash" id="icons"></i></a></td>
                            </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                    </table>
                    <div class="tabla__footer">
                        <p><?php print $numero?> docentes</p>
                    </div>
                </div>
            </div>
       </div>

