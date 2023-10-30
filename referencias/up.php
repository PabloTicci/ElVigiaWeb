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

if (!empty($_POST["btnsubir"]))
{
    if(empty($_POST["titulo"]) and empty($_POST["noticia"]) and empty($_POST["fotos"]) and empty($_POST["fuente"]) and empty($_POST["categoria"]))
    {
            echo "Acceso denegado";
    }
    else
    {
        $titulo = $_POST["titulo"];
        $introduccion = $_POST["introduccion"];
        $noticia = $_POST["noticia"];
        $fotos = $_POST["fotos"];
        $fuente = $_POST["fuente"];
        $categoria = $_POST["categoria"];

        $sql = $conn->query("INSERT INTO noticia (titulo, introduccion, noticia, fotos, fecha_publicacion, fuente, etiquetas) values ('$titulo','$introduccion','$noticia','$fotos',curdate(),'$fuente','$categoria')");
        
        if ($sql) {
            $mensaje = "Noticia subida correctamente.";
        } else {
            $mensaje = "Error al subir la noticia: " . $conn->error;
        }
    }
} 

?>