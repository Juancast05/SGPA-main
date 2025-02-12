<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="practica.css">
    <title>Registrar</title>
</head>

<body>

    <div class="carousel">
        <div class="carousel-images">
            <img src="./assets/img/img1.jpg" alt="Imagen 1">
            <img src="./assets/img/oriente-antioqueno.jpg" alt="Imagen 2">
            <img src="./assets/img/sena1.jpg" alt="Imagen 3">
        </div>
    </div>

    <button class="toggle-btn" id="toggleMenu">☰</button>

    <nav class="nav">
        <ul class="list">
            <li class="list_item">
                <div class="list_button">
                    <img src="./assets/dashboard.svg" alt="" class="list_img">
                    <a href="/SGPA/INICIO/admin.html" class="nav_link">Inicio</a>
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
                        <a href="#" class="nav_link nav_link--inside">Registrar</a>
                    </li>
                    <li class="list_inside">
                        <a href="./editar_practica.php" class="nav_link nav_link--inside">Editar</a>
                    </li>
                    <li class="list_inside">
                        <a href="./listado_practica.php" class="nav_link nav_link--inside">Ver listado</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <div class="content">
        <h1>Registrar Practicas</h1>
        <form action="./controlador_practica.php" method="POST">
            <div class="form-group">
                <div class="form-input">
                    <label for="Fecha_Inicio">Fecha de inicio:</label>
                    <input type="date" name="Fecha_Inicio" id="Fecha_inicio" required>
                </div>
                <div class="form-input">
                    <label for="Fecha_Fin">Fecha de finalización:</label>
                    <input type="date" name="Fecha_Fin" id="Fecha_fin" required>
                </div>
                <div class="form-input">
                    <label for="Fecha_Seguimiento">Fecha de seguimiento:</label>
                    <input type="date" name="Fecha_Seguimiento" id="Fecha_seguimiento" required>
                </div>
                <div class="form-input">
                    <label for="Observaciones">Observaciones:</label>
                    <input type="text" name="Observaciones" id="Observaciones" required>
                </div>
                <div class="form-input">
                    <label for="Continuidad">Continuidad:</label>
                    <input type="text" name="Continuidad" id="Continuidad" required>
                </div>
            </div>
            <input type="submit" name="registrarPractica" value="Registrar Practica">
        </form>
    </div>

    <script src="practica.js"></script>
</body>

</html>