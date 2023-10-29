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

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    // Realiza la verificación de las credenciales aquí
    // Reemplaza 'usuario_correcto' y 'clave_correcta' por los valores reales en tu base de datos.
    if ($usuario === 'usuario_correcto' && $clave === 'clave_correcta') {
        echo "success";
    } else {
        echo "error";
    }
}

?>