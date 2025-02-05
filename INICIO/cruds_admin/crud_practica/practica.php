<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="practica.css">
    <title>Practicas</title>
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
                    <a href="#" class="nav_link">Gestión de practicas</a>
                    <img src="./assets/arrow.svg" alt="" class="list_arrow">
                </div>

                <ul class="list_show">
                    <li class="list_inside">
                        <a href="./registrar_practica.php" class="nav_link nav_link--inside">Registrar</a>
                    </li>

                    <li class="list_inside">
                        <a href="editar_practica.php" class="nav_link nav_link--inside">Editar</a>
                    </li>

                    <li class="list_inside">
                        <a href="./listado_practica.php" class="nav_link nav_link--inside">Ver listado</a>
                    </li>

                </ul>

            </li>
        </ul>
    </nav>


    <script src="practica.js"></script>
</body>

</html>