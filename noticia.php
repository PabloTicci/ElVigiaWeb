<?php

    include ("referencias/noticia.php");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <link href="css/styles.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewerpoint" content="width-device-widht, initial-sacel=1.0">
    <title>EL VIGIA HGO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap">
</head>

<body>
<header class="header">
    <nav class="navbar navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
          <a href="index.php"><img src="resources/img/elvigialogo.png" class="logo-nav"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link" aria-current="page" href="n-estat.php">NOTICIAS ESTATALES</a>
              <a class="nav-link" href="n-nacio.php">NOTICIAS NACIONALES</a>
              <a class="nav-link" href="n-inter.php">NOTICIAS INTERNACIONALES</a>
              <a class="nav-link" href="n-depo.php">DEPORTES</a>
              <a class="nav-link" href="n-cult.php">CULTURA/ESPECTACULOS</a>
              <a class="nav-link" href="n-cald.php">CALDERO MAGICO</a>
              <span class="indicador" id="indicador"></span>
            </div>
          </div>
        </div>
      </nav>
</header>

<div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="news-container">
                    <h2 class="text-primary"><?php echo $titulo ?></h2>
                    <p class="lead"><?php echo $introduccion ?></p>
                    <img src="<?php echo $fotos ?>" alt="Imagen de la noticia" class="img-fluid rounded mb-3">
                    <p><?php echo $noticia ?></p>
                    <p>Fecha de Publicación: <?php echo $fecha_publicacion ?></p>
                    <p>Fuente de la Noticia: <a href="#"><?php echo $fuente ?></a></p>
                </div>
            </div>
        </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/popper.js@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>

<footer class="footer">
  <div class="container">
    <div class="footer-content">
      <div class="footer-text">
        <p>&copy; 2023 Tu Empresa. Todos los derechos reservados.</p>
      </div>
      <div class="footer-icons">
        <a href="https://m.facebook.com/profile.php/?id=100064576866780" target="_blank" class="face"><img src="facebook-icon.png" alt="Facebook"></a>
        <a href="https://x.com/vigiahidalgo?s=21&t=iynC3EZB_UOgI-jgpQvF6A" target="_blank" class="twit"><img src="instagram-icon.png" alt="Twitter"></a>
        <a href="https://www.youtube.com/tuempresa" target="_blank"><img src="youtube-icon.png" alt="YouTube"></a>
      </div>
    </div>
  </div>
</footer>



</html>