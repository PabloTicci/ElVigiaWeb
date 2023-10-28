<?php
$servername = "localhost";
$username = "u630558413_Pablo";
$password = "Lobitonan1723";
$dbname = "u630558413_Vigia";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}


$sql = "SELECT id, titulo, fotos, introduccion FROM noticia WHERE etiquetas LIKE 'Estatal'";

$result = $conn->query($sql);
?>