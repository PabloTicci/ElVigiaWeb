<!DOCTYPE html>
<html lang="es">

    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir noticias</title>
    </head>

    <body>
        <form action="">
            <div class="Titulo">
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="usuario" required>
            </div>

            <div class="Introduccion">
                <label for="introduccion">Introduccion</label>
                <input type="text" name="introduccion" id="introduccion" required>
            </div>

            

            <div class="noticia">
                <label for="noticia">Noticia</label>
                <input type="text" name="noticia" id="noticia" required>
            </div>

            

            <div class="fotos">
                <label for="fotos">URL de Foto</label>
                <input type="text" name="fotos" id="fotos" required>
            </div>

            

            <div class="fuente">
                <label for="fuente">Introduccion</label>
                <input type="text" name="fuente" id="fuente" required>
            </div>

            <form method="POST">
                <ul>
                     <li>
                        <label for="Estatales"><input type="radio" id="opcion1" name="opcion" value="Estatal"> Estatl</label>
                    </li>
                    <li>
                        <label for="Nacionales"><input type="radio" id="Nacionales" name="opcion" value="Nacionales"> Nacionales</label>
                    </li>
                     <li>
                        <label for="Internacionales"><input type="radio" id="Internacionales" name="opcion" value="Internacionales"> Opción 3</label>
                    </li>
                     <li>
                        <label for="Deportes"><input type="radio" id="Deportes" name="opcion" value="Deportes"> Deportes</label>
                    </li>
                    <li>
                        <label for="Cultura"><input type="radio" id="Cultura" name="opcion" value="Cultura"> Cultura</label>
                    </li>
                     <li>
                        <label for="Caldero"><input type="radio" id="Caldero" name="opcion" value="Caldero"> Caldero</label>
                    </li>
                </ul>
            <input type="submit" value="Enviar">
            </form>

            <button name="btnsubir" class="btn" type="submit" value="Subir">Subir Noticia</button>

        </form>
    </body>

</html>