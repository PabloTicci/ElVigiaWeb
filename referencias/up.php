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
if(isset($_POST['btnsubir']))
{
    if(empty($_POST["titulo"]) && empty($_POST["noticia"]) && empty($_POST["fotos"]) && empty($_POST["fuente"]) && empty($_POST["categoria"]))
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

        $consulta = "INSERT INTO noticia (titulo, introduccion, noticia, fotos, fecha_publicacion, fuente, etiquetas) values ('$titulo','$introduccion','$noticia','$fotos',curdate(),'$fuente','$categoria')";
        $resultado = mysqli_query($conn,$consulta);
        if($resultado)
        {
            ?>
            <h3 class = "ok"> Registro guadado Correctamente </h3>
            <?php
        }
        else
        {
            ?>
            <h3 class = "Bad"> Error </h3>
            <?php
        }
    }
} 

?>