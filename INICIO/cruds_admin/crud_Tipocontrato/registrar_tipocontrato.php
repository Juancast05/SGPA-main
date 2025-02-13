<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tipocontrato.css">
    <title>Registrar Fichas</title>
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
                    <a href="#" class="nav_link">Gestión de Tipo de contrato </a>
                    <img src="./assets/arrow.svg" alt="" class="list_arrow">
                </div>

                <ul class="list_show">
                    <li class="list_inside">
                        <a href="#" class="nav_link nav_link--inside">Registrar</a>
                    </li>

                    <li class="list_inside">
                        <a href="editar_contrato.php" class="nav_link nav_link--inside">Editar</a>
                    </li>

                    <li class="list_inside">
                        <a href="listado_contrato.php" class="nav_link nav_link--inside">Ver listado</a>
                    </li>

                </ul>
            </li>
        </ul>
    </nav>
    <br><br><br>
    <h1>Registrar Contrato</h1>
    <form action="./controlador_tipocontrato.php" method="POST">
        <div class="form-group">
            <div class="form-input">
                <label for="Nombre_contrato">Nombre del contrato:</label>
                <input type="text" name="Nombre_contrato" id="Nombre_contrato" required>
            </div>
            <div class="form-input">
                <label for="Descripcion_contrato">Descripción de Contrato:</label>
                <input type="text" name="Descripcion_contrato" id="Descripcion_contrato" required>
            </div>
        </div>
        </div>

        <input type="submit" name="RegistrarContrato" value="Registrar Contrato">
    </form>

    <script src="tipocontrato.js"></script>
</body>

</html>