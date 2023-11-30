<?php
  include("referencias/up.php")
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <link rel="stylesheet" href="css/upload.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subir Noticias</title>

  <!-- Agrega los enlaces a Bootstrap y a tu archivo de estilos CSS personalizado -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap">
   <!-- Crea un archivo estilos.css en el mismo directorio -->

</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <form method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control" required>
          </div>

          <div class="mb-3">
            <label for="introduccion" class="form-label">Introducción</label>
            <input type="text" name="introduccion" id="introduccion" class="form-control form-control-lg" required>
          </div>

          <div class="mb-3">
            <label for="noticia" class="form-label">Noticia</label>
            <textarea name="noticia" id="noticia" class="form-control form-control-lg" rows="15" required></textarea>
          </div>

          <div class="mb-3">
            <label for="fotos" class="form-label">Subir imágenes</label>
            <div class="form-group">
              <label for="imagen1" class="txt-subir">Seleccione una Imagen</label>
              <input id="imagen1" type="file" name="imagen[]" accept="image/*">
            </div>
            <div class="form-group">
              <label for="imagen2" class="txt-subir">Seleccione otra Imagen</label>
              <input id="imagen2" type="file" name="imagen[]" accept="image/*">
            </div>
            <!-- Puedes agregar más campos según la cantidad de imágenes que desees permitir -->
          </div>

          <div class="mb-3">
            <label for="videos" class="form-label">Subir video</label>
            <div class="form-group">
              <label for="video" class="txt-subir">Seleccione un Video</label>
              <input id="video" type="file" name="video" accept="video/*">
            </div>
          </div>

          <div class="mb-3">
            <label for="videos" class="form-label">Video URL</label>
            <input type="text" name="videos_url" id="videos_url" class="form-control" placeholder="Inserta la URL del video">
          </div>

              <!-- Modificar la entrada de archivos para permitir múltiples archivos -->
          <div class="mb-3">
            <label for="videos" class="form-label">Subir video (opcional)</label>
            <input id="my-input" type="file" name="videos[]" accept="video/*" multiple>
          </div>

          <div class="mb-3">
            <label for="fuente" class="form-label">Fuente</label>
            <input type="text" name="fuente" id="fuente" class="form-control" required>
          </div>

          <div class="mb-3">
            <label for="categoria" class="form-label">Categoría</label>
            <select id="categoria" name="categoria" class="form-select">
              <option value="Estatal">Estatal</option>
              <option value="Nacional">Nacionales</option>
              <option value="Internacional">Internacionales</option>
              <option value="Deporte">Deporte</option>
              <option value="Cultura">Cultura</option>
              <option value="Caldero">Caldero</option>
            </select>
          </div>

          <button name="btnsubir" class="btn btn-danger" type="submit" value="Subir">Subir Noticia</button>
        </form>
        <?php
          include("referencias/up.php")
        ?>
      </div>
    </div>
  </div>

  <!-- Agrega scripts de Bootstrap y jQuery (necesarios para algunos componentes de Bootstrap) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8Ef8hJFglQWNfZ73i5RZvHoL8o4QzD8JtSmo1SQU6jA9FOh63Kfjou1EM1twL" crossorigin="anonymous"></script>
</body>
</html>
