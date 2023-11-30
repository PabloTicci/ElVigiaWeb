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

if (isset($_POST['btnsubir'])) {
    // Check other fields for emptiness
    if (empty($_POST["titulo"]) || empty($_POST["noticia"]) || empty($_FILES["video"]["name"]) || empty($_POST["fuente"]) || empty($_POST["categoria"])) {
        echo "Acceso denegado";
    } else {
        $titulo = $_POST["titulo"];
        $introduccion = $_POST["introduccion"];
        $noticia = $_POST["noticia"];
        $fuente = $_POST["fuente"];
        $categoria = $_POST["categoria"];

        // File upload handling for images
        $imagenes = array();
        foreach ($_FILES["imagen"]["tmp_name"] as $key => $tmp_name) {
            $target_dir = "resources/img";
            $target_file = $target_dir . basename($_FILES["imagen"]["name"][$key]);
            move_uploaded_file($_FILES["imagen"]["tmp_name"][$key], $target_file);
            $imagenes[] = $target_file;
        }

        // File upload handling for video
        $target_dir_video = "resources/videos";
        $target_file_video = $target_dir_video . basename($_FILES["video"]["name"]);
        move_uploaded_file($_FILES["video"]["tmp_name"], $target_file_video);

        // Insert multimedia records for images
        foreach ($imagenes as $imagen) {
            $consulta_multimedia_imagen = "INSERT INTO multimedia (noticia_id, tipo, archivo_path) VALUES (LAST_INSERT_ID(), 'imagen', ?)";
            $stmt_multimedia_imagen = $conn->prepare($consulta_multimedia_imagen);
            $stmt_multimedia_imagen->bind_param("s", $imagen);
            $stmt_multimedia_imagen->execute();
        }

        // Insert multimedia record for video
        $consulta_multimedia_video = "INSERT INTO multimedia (noticia_id, tipo, archivo_path) VALUES (LAST_INSERT_ID(), 'video', ?)";
        $stmt_multimedia_video = $conn->prepare($consulta_multimedia_video);
        $stmt_multimedia_video->bind_param("s", $target_file_video);
        $stmt_multimedia_video->execute();

        // Insert news record
        $consulta_noticia = "INSERT INTO noticia (titulo, introduccion, noticia, fecha_publicacion, fuente, etiquetas) VALUES (?, ?, ?, curdate(), ?, ?)";
        $stmt_noticia = $conn->prepare($consulta_noticia);
        $stmt_noticia->bind_param("sssss", $titulo, $introduccion, $noticia, $fuente, $categoria);
        $stmt_noticia->execute();

        if ($stmt_noticia->affected_rows > 0) {
            ?>
            <h3 class="ok">Registro guardado correctamente</h3>
            <?php
        } else {
            ?>
            <h3 class="Bad">Error</h3>
            <?php
        }

        $stmt_multimedia_imagen->close();
        $stmt_multimedia_video->close();
        $stmt_noticia->close();
    }
}

?>
