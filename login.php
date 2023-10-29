<?php
    include("referencias/login.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form </title>
    <link rel="stylesheet" href="css/login.css">
    
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form method = "post" action="login.php">
            <div class="user-box">
                <input type="text" name="usuario" required="">
                <label for="usuario">Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="clave" required="">
                <label for="clave">Password</label>
            </div>
            <!--<input type="submit" value="Iniciar sesión">-->
            <a href="upload.php">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <input type="submit" value="Iniciar sesión">
            </a>
        </form>
    </div>
</body>
</html>