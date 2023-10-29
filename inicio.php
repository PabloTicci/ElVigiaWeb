<?php
    include("referencias/validacion.php");
?>

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
        <form method="post" action="javascript:void(0);" onsubmit="validateForm()">
            <div class="user-box">
                <input type="text" name="usuario" id="usuario" required>
                <label for="usuario">Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="clave" id="clave" required>
                <label for="clave">Password</label>
            </div>
            <a href="javascript:void(0);" onclick="validateForm()">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
            </a>
        </form>
    </div>
    
    <script src="js/sesion.js"></script>
</body>
</html>
