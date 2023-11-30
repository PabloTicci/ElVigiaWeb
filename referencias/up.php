<?php

$servername = "localhost";
$username = "u630558413_Pablo";
$password = "Lobitonan1723";
$dbname = "u630558413_Vigia";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Desactivar desencadenadores
mysqli_query($conn, "SET foreign_key_checks = 0;");

// Realizar la operación de inserción
if (isset($_POST['btnsubir'])) {
    // ... (tu código de inserción)

    // Por ejemplo:
    $titulo = $_POST["titulo"];
    $introduccion = $_POST["introduccion"];
    $noticia = $_POST["noticia"];
    $fuente = $_POST["fuente"];
    $categoria = $_POST["categoria"];
    $videos_url = $_POST["videos_url"];

    // Resto de tu lógica de inserción aquí

    $consultaNoticia = "INSERT INTO noticia (titulo, introduccion, noticia, fotos, fecha_publicacion, fuente, etiquetas) 
                 VALUES ('$titulo','$introduccion','$noticia','$target_file',curdate(),'$fuente','$categoria')";

    $resultadoNoticia = mysqli_query($conn, $consultaNoticia);

    if ($resultadoNoticia) {
        // Si la inserción en la tabla noticia fue exitosa, ahora insertamos en la tabla multimedia
        $idNoticia = mysqli_insert_id($conn); // Obtener el ID de la última inserción

        $consultaMultimedia = "INSERT INTO multimedia (id_noticia, videos_url) VALUES ('$idNoticia', '$videos_url')";
        $resultadoMultimedia = mysqli_query($conn, $consultaMultimedia);

        if ($resultadoMultimedia) {
            echo "<h3 class='ok'>Registro guardado correctamente</h3>";
        } else {
            echo "<h3 class='Bad'>Error al insertar en la tabla multimedia</h3>";
        }
    } else {
        echo "<h3 class='Bad'>Error al insertar en la tabla noticia</h3>";
    }
}

// Reactivar desencadenadores
mysqli_query($conn, "SET foreign_key_checks = 1;");

?>
