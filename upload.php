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

  <!-- Agrega scripts de Bootstrap y jQuery (necesarios para algunos componentes de Bootstrap) -->
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <form action="">
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
            <input type="text" name="noticia" id="noticia" class="form-control form-control-lg" rows="6" required>
          </div>

          <div class="mb-3">
            <label for="fotos" class="form-label">URL de Foto</label>
            <input type="text" name="fotos" id="fotos" class="form-control" required>
          </div>

          <div class="mb-3">
            <label for="fuente" class="form-label">Fuente</label>
            <input type="text" name="fuente" id="fuente" class="form-control" required>
          </div>

          <div class="mb-3">
            <label for="opciones" class="form-label">Categoría</label>
            <select id="opciones" name="opcion" class="form-select">
              <option value="Estatal">Estatal</option>
              <option value="Nacionales">Nacionales</option>
              <option value="Internacionales">Internacionales</option>
              <option value="Deportes">Deportes</option>
              <option value="Cultura">Cultura</option>
              <option value="Caldero">Caldero</option>
            </select>
          </div>

          <button name="btnsubir" class="btn btn-danger" type="submit" value="Subir">Subir Noticia</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>

</body>
</html>
