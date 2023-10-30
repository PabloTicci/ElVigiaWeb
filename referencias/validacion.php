<?php
$servername = "localhost";
$username = "u630558413_Pablo";
$password = "Lobitonan1723";
$dbname = "u630558413_Vigia";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if (!empty($_POST["btningresar"]))
{
    if(empty($_POST["usuario"]) and empty($_POST["clave"]))
    {
            echo "Acceso denegado";
    }
    else
    {
        $usuario = $_POST["usuario"];
        $clave = $_POST["clave"];

        $sql = $conn->query(" SELECT * FROM  usuario WHERE usuario='$usuario' and clave='$clave'");
        if($datos = $sql->fetch_object())
        {
            header("location:upload.php");
        }
    }
} 


?>