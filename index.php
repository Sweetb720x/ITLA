<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles/stylemain.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="center">
        <h1>ITLA</h1>
        <form method="POST" action="validar.php">
        <div class="field">
                <input type="text" name="email" id="email" required>
                <span></span>
                <label>Email</label>
            </div>
            <div class="field">
                <input type="password" name="clave" id="clave" required>
                <span></span>
                <label>Password</label>
            </div>
            <input type="submit" value="Ingresar">
        </form>
    </div>
    <!--
        <br><br>
        <center>
            <a href="#" style="--clr:#6eff3e"><span>Button</span><i></i></a>
        </center>
    -->
    </body>
</html> 