

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>

        <?php
            include("referencias/validacion.php");
        ?>

        
        <form method="post" action="">
            <div class="user-box">
                <input type="text" name="usuario" id="usuario" required>
                <label for="usuario">Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="clave" id="clave" required>
                <label for="clave">Password</label>
            </div>
            <button name="btningresar" class="btn" type="submit" value="Iniciar Seseio">Iniciar sesion</button>
        </form>
    </div>
    
    <script src="js/sesion.js"></script>
</body>
</html>
