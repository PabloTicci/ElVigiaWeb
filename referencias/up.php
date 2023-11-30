<?php

$servername = "localhost";
$username = "u630558413_Pablo";
$password = "Lobitonan1723";
$dbname = "u630558413_Vigia";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if (isset($_POST['btnsubir'])) {
    // Otras comprobaciones...

    $titulo = $_POST["titulo"];
    $introduccion = $_POST["introduccion"];
    $noticia = $_POST["noticia"];
    $fuente = $_POST["fuente"];
    $categoria = $_POST["categoria"];

    // Nueva entrada para la URL del video
    $videos_url = $_POST["videos_url"];

    // Manejo de archivos de video
    $videos = array();
    $target_file = '';

    if (!empty($_FILES['videos']['name'][0])) {
        // Si se subieron archivos de video
        $target_dir = "resources/videos/"; // Cambia la ruta según tu estructura de carpetas

        foreach ($_FILES['videos']['tmp_name'] as $key => $tmp_name) {
            $video_name = $_FILES['videos']['name'][$key];
            $target_file = $target_dir . basename($video_name);
            move_uploaded_file($tmp_name, $target_file);
            $videos[] = $target_file;
        }
    }

    // Consulta SQL para insertar datos, incluyendo la URL del video
    $consulta = "INSERT INTO noticia (titulo, introduccion, noticia, fotos, fecha_publicacion, fuente, etiquetas, videos_url) 
                 VALUES ('$titulo','$introduccion','$noticia','$target_file',curdate(),'$fuente','$categoria','$videos_url')";

    $resultado = mysqli_query($conn, $consulta);

    if ($resultado) {
        ?>
        <h3 class="ok">Registro guardado correctamente</h3>
        <?php
    } else {
        ?>
        <h3 class="Bad">Error</h3>
        <?php
    }
}

?>
