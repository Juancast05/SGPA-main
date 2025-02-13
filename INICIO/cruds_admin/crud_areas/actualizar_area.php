<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="area.css">
    <title>Actualizar Datos</title>
</head>
<body>
    <h1>Actualizar Áreas</h1>
    <form action="./controlador_area.php" method="POST">
        <div class="form-group">
             <div>
                <label for="">ID del Área:</label><br>
                <input type="number" name="ID_Area"><br>
            </div>

            <div>
                <label for="">Nombres del Área:</label><br>
                <input type="text" name="Nombre_Area"><br>
            </div>

            <div>
                <label for="">Descripción del Área:</label><br>
                <input type="text" name="Descripcion_Area"><br>
            </div>
        </div>
        <input type="submit" name="actualizarArea" value="Actualizar Area">
    </form>
</body>
</html>