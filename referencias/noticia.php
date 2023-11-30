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

// Inicializa variables
$titulo = $introduccion = $noticia = $fotos = $fecha_publicacion = $fuente = "";

// Recupera el ID de la noticia desde la URL
if (isset($_GET['id'])) {
    $id_noticia = $_GET['id'];
    
    // Realiza una consulta preparada para obtener la información de la noticia seleccionada
    $sql_noticia = "SELECT titulo, introduccion, noticia, fecha_publicacion, fuente FROM noticia WHERE id = ?";
    
    $stmt_noticia = $conn->prepare($sql_noticia);
    $stmt_noticia->bind_param("i", $id_noticia);
    $stmt_noticia->execute();
    $stmt_noticia->bind_result($titulo, $introduccion, $noticia, $fecha_publicacion, $fuente);

    // Verifica si se encontraron resultados
    if ($stmt_noticia->fetch()) {
        // La información de la noticia está disponible en las variables
    } else {
        echo "No se encontró la noticia seleccionada.";
        exit; // Agregamos exit para detener la ejecución del script si no se encuentra la noticia
    }

    $stmt_noticia->close(); // Cerrar la primera consulta antes de realizar otras consultas

    // Recupera las fotos asociadas a la noticia
    $sql_fotos = "SELECT archivo_path FROM multimedia WHERE noticia_id = ? AND tipo = 'imagen'";
    $stmt_fotos = $conn->prepare($sql_fotos);
    $stmt_fotos->bind_param("i", $id_noticia);
    $stmt_fotos->execute();
    $stmt_fotos->bind_result($foto);

    $fotos = array();
    while ($stmt_fotos->fetch()) {
        $fotos[] = $foto;
    }

    $stmt_fotos->close();

    // Recupera los videos asociados a la noticia
    $sql_videos = "SELECT archivo_path FROM multimedia WHERE noticia_id = ? AND tipo = 'video'";
    $stmt_videos = $conn->prepare($sql_videos);
    $stmt_videos->bind_param("i", $id_noticia);
    $stmt_videos->execute();
    $stmt_videos->bind_result($video);

    $videos = array();
    while ($stmt_videos->fetch()) {
        $videos[] = $video;
    }

    $stmt_videos->close();
} else {
    echo "ID de noticia no especificado.";
    exit; // Agregamos exit para detener la ejecución del script si no se especifica el ID de la noticia
}

// Cierra la conexión a la base de datos
$conn->close();
?>
