<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../styles/styleadmin.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h1><span class="las la-university"></span><span>ITLA</span></h1>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active"><span class="las la-book"></span>
                    <span>INICIO</span></a>
                </li>
                <li>
                    <a href="adminDocentes.php"><span class="las la-user-tie"></span>
                    <span>DOCENTES</span></a>
                </li>
                <li>
                    <a href="adminHorarios.php"><span class="las la-calendar"></span>
                    <span>HORARIOS</span></a>
                </li>
                <li>
                    <a href="adminAlumnos.php"><span class="las la-user-graduate"></span>
                    <span>ALUMNOS</span></a>
                </li>
                <li>
                    <a href="adminSalir.php"><span class="las la-sign-out-alt"></span>
                    <span>CERRAR SESION</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h1>
                <label for="nav-toggle">
                    <span class="las la-bars">
                    </span>
                </label>
                INSTITUTO TECNOLOGICO
            </h1>
                <div class="user-wrapper">
                    <img src="../img/logoitla.JPG" alt="logo itla" width="60px" height="50px">
                    <div>
                        <?php 
                        session_start();
                        $user = $_SESSION['Email'];
                        if(!isset($user)){
                            header("Location: index.php");
                        }else{
                            echo "<h4>$user</h4>";
                        }
                        ?>
                        <small>Admin</small>
                    </div>
                </div>     
        </header>
        <main>
            <div class="quantity">
            <div class="quantity-single">
                    <div>
                        <?php
                        include('../conexion.php');
                        $alumnos = current($bd->query("select count(*) from estudiantes;")->fetch());
                        echo "<h1>$alumnos</h1>";
                        ?>
                        <span>Alumnos</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
                <div class="quantity-single">
                    <div>
                    <?php
                        $docentes = current($bd->query("select count(*) from docentes;")->fetch());
                        echo "<h1>$docentes</h1>";
                        ?>
                        <span>Docentes</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
                <div class="quantity-single">
                    <div>
                        <h1>21,318</h1>
                        <span>Graduados</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>









