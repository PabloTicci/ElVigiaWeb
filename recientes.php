<?php
// Conecta a la base de datos
$servername = "localhost";
$username = "u630558413_Pablo";
$password = "Lobitonan1723";
$dbname = "u630558413_Vigia";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Realiza una consulta para obtener las noticias más recientes
$sql = "SELECT id, titulo, fotos, fecha_publicacion FROM noticia ORDER BY id DESC LIMIT 10"; 

$result = $conn->query($sql);
?>
