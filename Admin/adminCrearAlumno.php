<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../styles/styleadmin.css">
    <title>Document</title>
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
                    <a href="../Admin/admin.php"><span class="las la-book"></span>
                    <span>INICIO</span></a>
                </li>
                <li>
                    <a href="../Admin/adminDocentes.php"><span class="las la-user-tie"></span>
                    <span>DOCENTES</span></a>
                </li>
                <li>
                    <a href="../Admin/adminHorarios.php"><span class="las la-calendar"></span>
                    <span>HORARIOS</span></a>
                </li>
                <li>
                    <a href="../Admin/adminAlumnos.php" class="active"><span class="las la-user-graduate"></span>
                    <span>ALUMNOS</span></a>
                </li>
                <li>
                    <a href="../Admin/adminSalir.php"><span class="las la-sign-out-alt"></span>
                    <span>CERRAR SESION</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <h1>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                INSTITUTO TECNOLOGICO
            </h1>
            <div class="user-wrapper">
                <img src="../img/logoitla.JPG" alt="logo ila" width="60px" height="50px">
                <div>
                    <?php
                    session_start();
                    $user = $_SESSION['Email'];
                    if(!isset($user)){
                        header('Location: index.php');
                    }else{
                        echo "<h4>$user</h4>";
                    }
                    ?>
                    <small>Admin</small>
                </div>
            </div>
        </header>
    <main>
        <section class="container_admin">
            <img src="../img/logoitla.JPG" alt="logo itla" class="avatar">
            <h2>REGISTRO</h2>
            <form action="adminAgregarAlumno.php" method="post">
            <div class="field">
                <input type="text" name="matricula" id="matricula" required>
                <span></span>
                <label>Matricula</label>
            </div>
            <div class="field">
                <input type="text" name="nombre" id="nombre" required>
                <span></span>
                <label>Nombre</label>
            </div>
            <div class="field">
                <input type="text" name="apellido" id="apellido" required>
                <span></span>
                <label>Apellido</label>
            </div>
                <select class="select" name="carrera" id="carrera" required>
                <option value="" disabled selected>Carrera</option>
                <option value="1">Software</option>
                <option value="2">Redes</option>
                <option value="3">Multimedia</option>
                <option value="4">Diseño</option>
                <option value="5">Sonido</option>
                <option value="6">Seguridad</option>
                <option value="7">IoT</option>
                </select>
                <br>
                <button class="btnRegistrar">Registrar</button>
            </form>
        </section>
    </main>
</body>
</html>


