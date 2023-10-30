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
                <label for="opciones">Selecciona una opción:</label>
                    <select id="opciones" name="opcion">
                            <option value="Estatal">Estatal</option>
                            <option value="Nacionales">Nacionales</option>
                            <option value="Internacionales">Internacionales</option>
                            <option value="Deportes">Deportes</option>
                            <option value="Cultura">Cultura</option>
                            <option value="Caldero">Caldero</option>
                    </select>   
            </form>

            <button name="btnsubir" class="btn" type="submit" value="Subir">Subir Noticia</button>

        </form>
    </body>

</html>