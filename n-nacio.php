<?php
    include("referencias/nacionales.php");
?>


<!DOCTYPE html>
<html lang="es">
  
<head>
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/noticia.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EL VIGIA HGO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5119595055377524"
     crossorigin="anonymous"></script>

</head>

<body>
<header class="header">
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a href="index.php"><img src="resources/img/elvigialogo.png" class="logo-nav"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <button class="cerrar"><span class="navbar-toggler-icon"></span></button>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="n-estat.php">NOTICIAS ESTATALES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="n-nacio.php">NOTICIAS NACIONALES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="n-inter.php">NOTICIAS INTERNACIONALES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="n-depo.php">DEPORTES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="n-cult.php">CULTURA/ESPECTACULOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="n-cald.php">CALDERO MAGICO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>


<div class="container cont-noti">
        <div class="Noticias">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $id = $row["id"];
                    $titulo = $row["titulo"];
                    $fotos = $row["fotos"];
                    $introduccion = $row["introduccion"];
            ?>
            <div class="noticia">
              <div class="imagen-noticia">
                <img src="<?php echo $fotos; ?>" alt="Noticia 1">
              </div>
              <div class="titulo"><?php echo $titulo; ?></div>
              <div class="introduccion"><?php echo $introduccion; ?></div>
              <a href="noticia.php?id=<?php echo $id; ?>" class="btn btn-primary">Ver Noticia</a>
           </div>

            <?php
                }
            } else {
                echo "No se encontraron noticias con la etiqueta $etiqueta.";
            }
            ?>
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
        <p>&copy; 2023 El Vigia Hidalgo. Todos los derechos reservados.</p>
      </div>
      <div class="footer-icons">
        <a href="https://m.facebook.com/profile.php/?id=100064576866780" target="_blank" class="face"><img src="resources/img/facebook-icon.png" alt="Facebook"></a>
        <a href="https://x.com/vigiahidalgo?s=21&t=iynC3EZB_UOgI-jgpQvF6A" target="_blank" class="twit"><img src="resources/img/twitter-icon.png" alt="Twitter"></a>
        <a href="https://www.tiktok.com/@viga.hidalgo?_t=8gypQDaGQ22&_r=1" alt="TikTok" class="tiktok"><img src="resources/img/logotiktok.png" alt="TikTok"></a>
      </div>
    </div>
  </div>
</footer>




</html>