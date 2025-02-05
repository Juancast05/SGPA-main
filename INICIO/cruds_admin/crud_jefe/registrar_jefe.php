<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="jefe.css">
    <title>Registrar jefe</title>
</head>

<body>

    <div class="carousel">
        <div class="carousel-images">
            <img src="./assets/img/img1.jpg" alt="Imagen 1">
            <img src="./assets/img/oriente-antioqueno.jpg" alt="Imagen 2">
            <img src="./assets/img/sena1.jpg" alt="Imagen 3">
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
                    <a href="#" class="nav_link">Gestión de jefes</a>
                    <img src="./assets/arrow.svg" alt="" class="list_arrow">
                </div>

                <ul class="list_show">
                    <li class="list_inside">
                        <a href="#" class="nav_link nav_link--inside">Registrar</a>
                    </li>

                    <li class="list_inside">
                        <a href="editar_practicante.php" class="nav_link nav_link--inside">Editar</a>
                    </li>

                    <li class="list_inside">
                        <a href="listado_practicante.php" class="nav_link nav_link--inside">Ver listado</a>
                    </li>

                </ul>

            </li>
        </ul>
    </nav>
    <br><br><br>
    <h1>Registrar Jefes</h1>
    <form action="./controlador_practicante.php" method="POST">
        <div class="form-group">
            <div>
                <label for="">Nombres del Jefe:</label><br>
                <input type="text" name="Nombre_Practicante"><br>
            </div>

            <div>
                <label for="">Apellidos del Jefe:</label><br>
                <input type="text" name="Apellido_Practicante"><br>
            </div>

            <div>
                <label for="">Tipo de identificación:</label><br>
                <input type="text" name="Tipo_Identificacion"><br>
            </div>

            <div><label for="">Identificación:</label><br>
                <input type="text" name="Identificacion"><br>
            </div>

            <div>
                <label for="">Fecha de nacimiento:</label><br>
                <input type="date" name="Fecha_Nacimiento"><br>
            </div>

            <div>
                <label for="">País de nacimiento:</label><br>
                <input type="text" name="Pais_Nacimiento"><br>
            </div>

            <div>
                <label for="">Departamento de nacimiento:</label><br>
                <input type="text" name="Departamento_Nacimiento"><br>
            </div>

            <div>
                <label for="">Ciudad de nacimiento:</label><br>
                <input type="text" name="Ciudad_Nacimiento"><br>
            </div>

            <div>
                <label for="">Correo:</label><br>
                <input type="email" name="Correo_Personal"><br>
            </div>

            <div>
                <label for="">Correo Sena:</label><br>
                <input type="email" name="Correo_Sena"><br>
            </div>

            <div>
                <label for="">Teléfono:</label><br>
                <input type="text" name="Telefono"><br>
            </div>


        </div>
        <input type="submit" name="RegistrarJefe" value="Registrar Jefe">
    </form>

    <script src="jefe.js"></script>
</body>

</html> 