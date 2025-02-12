<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="programa.css">
    <title>Actualizar Datos</title>
</head>
<body>
    <h1>Actualizar Programas</h1>
    <form action="./controlador_programa.php" method="POST">
        <div class="form-group">
             <div>
                <label for="">ID del Programa:</label><br>
                <input type="number" name="ID_Programa"><br>
            </div>

            <div>
                <label for="">Nombre del Programa:</label><br>
                <input type="text" name="Nombre_Programa"><br>
            </div>

            <div>
                <label for="">Descripcion del Programa:</label><br>
                <input type="text" name="Descripcion_Programa"><br>
            </div>
        </div>
        <input type="submit" name="actualizarPrograma" value="Actualizar Practica">
    </form>
    
</body>
</html>