<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="empresa.css">
    <title>Registrar Empresa</title>
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
                    <a href="#" class="nav_link">Gestión de empresas</a>
                    <img src="./assets/arrow.svg" alt="" class="list_arrow">
                </div>

                <ul class="list_show">
                    <li class="list_inside">
                        <a href="#" class="nav_link nav_link--inside">Registrar</a>
                    </li>

                    <li class="list_inside">
                        <a href="editar_empresa.php" class="nav_link nav_link--inside">Editar</a>
                    </li>

                    <li class="list_inside">
                        <a href="listado_empresa.php" class="nav_link nav_link--inside">Ver listado</a>
                    </li>

                </ul>

            </li>
        </ul>
    </nav>
    <br><br><br>
    <h1>Registrar Empresa</h1>
    <form action="./controlador_empresa.php" method="POST">
    <div class="form-group">
            <div>
                <label for="">Nombre de la empresa:</label><br>
                <input type="text" name="Nombre_empresa"><br>
            </div>

            <div>
                <label for="">NIT de la empresa:</label><br>
                <input type="text" name="NIT"><br>
            </div>

            <div>
                <label for="">Correo de la empresa:</label><br>
                <input type="email" name="Correo_empresa"><br>
            </div>

            <div><label for="">Teléfono de la empresa:</label><br>
                <input type="text" name="Telefono_empresa"><br>
            </div>

            <div>
                <label for="">Dirección de la empresa:</label><br>
                <input type="text" name="Direccion_empresa"><br>
            </div>

        </div>
        <input type="submit" name="RegistrarEmpresa" value="Registrar Empresa">
    </form>

    <script src="empresa.js"></script>
</body>

</html> 