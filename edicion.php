<?php

$servername = "localhost";
$username = "u630558413_Pablo";
$password = "Lobitonan1723";
$dbname = "u630558413_Vigia";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize input
function sanitize_input($data) {
    global $conn;
    return mysqli_real_escape_string($conn, $data);
}

// Handle Delete
if (isset($_GET['delete'])) {
    $delete_id = sanitize_input($_GET['delete']);
    $delete_query = "DELETE FROM noticia WHERE id = '$delete_id'";
    mysqli_query($conn, $delete_query);
    header("Location: menu.php"); // Redirect to menu page after deletion
    exit();
}

// Handle Edit
if (isset($_GET['edit'])) {
    $edit_id = sanitize_input($_GET['edit']);

    if (isset($_POST['update'])) {
        $new_titulo = sanitize_input($_POST['new_titulo']);
        $new_introduccion = sanitize_input($_POST['new_introduccion']);
        $new_noticia = sanitize_input($_POST['new_noticia']);
        $new_fotos = sanitize_input($_POST['new_fotos']);
        $new_fuente = sanitize_input($_POST['new_fuente']);
        $new_etiquetas = sanitize_input($_POST['new_etiquetas']);

        $update_query = "UPDATE noticia SET titulo='$new_titulo', introduccion='$new_introduccion', noticia='$new_noticia', fotos='$new_fotos', fuente='$new_fuente', etiquetas='$new_etiquetas' WHERE id='$edit_id'";
        mysqli_query($conn, $update_query);
        header("Location: menu.php"); // Redirect to menu page after update
        exit();
    }

    // Fetch existing data for the selected record
    $fetch_query = "SELECT * FROM noticia WHERE id='$edit_id'";
    $result = mysqli_query($conn, $fetch_query);
    $row = mysqli_fetch_assoc($result);

    // Display the form with existing data for editing
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Noticia</title>
    </head>
    <body>
        <h2>Editar Noticia</h2>
        <form method="post">
            <!-- Display existing data for editing -->
            <input type="text" name="new_titulo" value="<?php echo $row['titulo']; ?>" required>
            <textarea name="new_introduccion"><?php echo $row['introduccion']; ?></textarea>
            <textarea name="new_noticia" required><?php echo $row['noticia']; ?></textarea>
            <input type="text" name="new_fotos" value="<?php echo $row['fotos']; ?>">
            <input type="text" name="new_fuente" value="<?php echo $row['fuente']; ?>" required>
            <input type="text" name="new_etiquetas" value="<?php echo $row['etiquetas']; ?>">
            <button type="submit" name="update">Actualizar</button>
        </form>
    </body>
    </html>
    <?php
    exit();
}

// Fetch all records for display
$select_query = "SELECT * FROM noticia";
$result = mysqli_query($conn, $select_query);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Noticias</title>
</head>
<body>
    <h2>Menú de Noticias</h2>
    <table border="1">
        <tr>
            <th>Título</th>
            <th>Fecha de Publicación</th>
            <th>Acciones</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>{$row['titulo']}</td>";
            echo "<td>{$row['fecha_publicacion']}</td>";
            echo "<td>
                    <a href='menu.php?edit={$row['id']}'>Editar</a>
                    <a href='menu.php?delete={$row['id']}'>Eliminar</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
// Close the database connection
mysqli_close($conn);
?>
