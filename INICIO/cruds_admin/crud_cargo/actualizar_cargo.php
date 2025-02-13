<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="area.css">
    <title>Actualizar Datos</title>
</head>
<body>
    <h1>Actualizar Cargos</h1>
    <form action="./controlador_cargo.php" method="POST">
        <div class="form-group">
             <div>
                <label for="">ID del Cargo:</label><br>
                <input type="number" name="ID_Cargo"><br>
            </div>

            <div>
                <label for="">Nombre del Cargo:</label><br>
                <input type="text" name="Nombre_Cargo"><br>
            </div>

            <div>
                <label for="">Descripción del Cargo:</label><br>
                <input type="text" name="Descripcion_Cargo"><br>
            </div>
        </div>
        <input type="submit" name="actualizarCargo" value="Actualizar Cargo">
    </form>
</body>
</html>