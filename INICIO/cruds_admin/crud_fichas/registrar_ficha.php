<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ficha.css">
    <title>Registrar Ficha</title>
</head>

<body>

    <div class="carousel">
        <div class="carousel-images">
            <img src="../../img/img1.jpg" alt="Imagen 1">
            <img src="../../img/oriente-antioqueno.jpg" alt="Imagen 2">
            <img src="../../img/sena1.jpg" alt="Imagen 3">
        </div>
    </div>


    <nav class="nav">
        <ul class="list">

            <li class="list_item">
                <div class="list_button">
                    <img src="./assets/dashboard.svg" alt="" class="list_img">
                    <a href="/INICIO/admin.html" class="nav_link">Inicio</a>
                </div>
            </li>

            <li class="list_item list_item--click">
                <div class="list_button list_button--click">
                    <img src="./assets/gestion.svg" alt="" class="list_img">
                    <a href="#" class="nav_link">Gestión de fichas</a>
                    <img src="./assets/arrow.svg" alt="" class="list_arrow">
                </div>

                <ul class="list_show">
                    <li class="list_inside">
                        <a href="#" class="nav_link nav_link--inside">Registrar</a>
                    </li>

                    <li class="list_inside">
                        <a href="editar_ficha.php" class="nav_link nav_link--inside">Editar</a>
                    </li>

                    <li class="list_inside">
                        <a href="listado_ficha.php" class="nav_link nav_link--inside">Ver listado</a>
                    </li>

                </ul>

            </li>
        </ul>
    </nav>
    <br><br><br>
    <h1>Registrar Ficha</h1>
    <form action="./controlador_ficha.php" method="POST">
        <div class="form-group">
            <div>
                <label for="">Número de ficha</label><br>
                <input type="text" name="Numero_ficha"><br>
            </div>

            <div>
                <label for="">Descripcion de la ficha</label><br>
                <input type="text" name="Descripcion_ficha"><br>
            </div>

        </div>
        <input type="submit" name="RegistrarFicha" value="Registrar Ficha">
    </form>

    <script src="ficha.js"></script>
</body>

</html> 