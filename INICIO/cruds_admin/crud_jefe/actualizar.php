<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="jefe.css">
    <title>Actualizar Datos</title>
</head>
<body>
    <h1>Actualizar Practicas</h1>
    <form action="./controlador_jefe.php" method="POST">
        <div class="form-group">
             <div>
                <label for="">ID del Coformador:</label><br>
                <input type="number" name="ID_Coformador"><br>
            </div>

            <div>
                <label for="">Nombre del Coformador:</label><br>
                <input type="text" name="Nombre_Coformador"><br>
            </div>

            <div>
                <label for="">Apellidos del Coformador:</label><br>
                <input type="text" name="Apellido_Coformador"><br>
            </div>

            <div>
                <label for="">Correo del Coformador:</label><br>
                <input type="text" name="Correo_Coformador"><br>
            </div>

            <div><label for="">Telefono:</label><br>
                <input type="number" name="Telefono"><br>
            </div>

        </div>
        <input type="submit" name="actualizarCoformador" value="Actualizar Coformador">
    </form>
    
</body>
</html>