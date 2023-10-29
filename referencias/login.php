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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    // Consulta para verificar las credenciales
    $sql = "SELECT ID FROM usuario WHERE usuario = '$usuario' AND clave = '$clave'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Las credenciales son correctas, el usuario está autenticado
        echo "¡Acceso concedido!";
    } else {
        // Las credenciales son incorrectas, el usuario no está autenticado
        echo "¡Acceso denegado!";
    }
}

?>