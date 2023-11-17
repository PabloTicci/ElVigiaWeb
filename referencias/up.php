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
    if (empty($_POST["titulo"]) || empty($_POST["noticia"]) || empty($_POST["fuente"]) || empty($_POST["categoria"])) {
        echo "Acceso denegado";
    } else {
        $titulo = $_POST["titulo"];
        $introduccion = $_POST["introduccion"];
        $noticia = $_POST["noticia"];
        $fuente = $_POST["fuente"];
        $categoria = $_POST["categoria"];

        // Procesar la imagen
        $imagenNombre = $_FILES['imagen']['name'];
        $imagenTemp = $_FILES['imagen']['tmp_name'];
        $carpetaDestino = "resources/img"; // Cambia esto a la carpeta donde deseas guardar las imágenes

        move_uploaded_file($imagenTemp, $carpetaDestino . $imagenNombre);

        $consulta = "INSERT INTO noticia (titulo, introduccion, noticia, fotos, fecha_publicacion, fuente, etiquetas) values ('$titulo','$introduccion','$noticia','$carpetaDestino$imagenNombre',curdate(),'$fuente','$categoria')";
        $resultado = mysqli_query($conn, $consulta);

        if ($resultado) {
            echo '<h3 class="ok">Registro guardado correctamente</h3>';
        } else {
            echo '<h3 class="Bad">Error</h3>';
        }
    }
}

?>