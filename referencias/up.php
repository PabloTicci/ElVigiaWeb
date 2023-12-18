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
    if (empty($_POST["titulo"]) || empty($_POST["noticia"]) || empty($_FILES["imagen"]["name"]) || empty($_POST["fuente"]) || empty($_POST["categoria"])) {
        echo "Acceso denegado";
    } else {
        $titulo = $_POST["titulo"];
        $introduccion = $_POST["introduccion"];
        $noticia = mysqli_real_escape_string($conn, $_POST["noticia"]); // Escapar caracteres especiales
        $fuente = $_POST["fuente"];
        $categoria = $_POST["categoria"];

        // File upload handling
        $target_dir = "resources/img";  // Set your target directory
        $target_file = $target_dir . basename($_FILES["imagen"]["name"]);
        move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file);

       // Antes de insertar, reemplazar los saltos de línea
        $noticia = str_replace("\r\n", "\n", $noticia);

        // Utilizando una consulta preparada para evitar la inyección SQL
        $consulta = $conn->prepare("INSERT INTO noticia (titulo, introduccion, noticia, fotos, fecha_publicacion, fuente, etiquetas) VALUES (?, ?, ?, ?, curdate(), ?, ?)");
        $consulta->bind_param("ssssss", $titulo, $introduccion, $noticia, $target_file, $fuente, $categoria);


        if ($consulta->execute()) {
            ?>
            <h3 class="ok">Registro guardado correctamente</h3>
            <?php
        } else {
            ?>
            <h3 class="Bad">Error</h3>
            <?php
        }

        $consulta->close();
    }
}
?>
