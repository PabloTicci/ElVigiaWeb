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

// Recupera el ID de la noticia desde la URL
if (isset($_GET['id'])) {
    $id_noticia = $_GET['id'];
    
    // Realiza una consulta para obtener la información de la noticia seleccionada
    $sql = "SELECT titulo, introduccion, noticia, fotos, fecha_publicacion, fuente FROM noticia WHERE id = $id_noticia";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $titulo = $row["titulo"];
        $introduccion = $row["introduccion"];
        $noticia = $row["noticia"];
        $fotos = $row["fotos"];
        $fecha_publicacion = $row["fecha_publicacion"];
        $fuente = $row["fuente"];
    } else {
        echo "No se encontró la noticia seleccionada.";
    }
} else {
    echo "ID de noticia no especificado.";
}

$conn->close();
?>
