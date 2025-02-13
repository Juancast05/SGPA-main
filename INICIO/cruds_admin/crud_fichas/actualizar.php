<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ficha.css">
    <title>Actualizar Datos</title>
</head>
<body>
    <h1>Actualizar Fichas</h1>
    <form action="./controlador_ficha.php" method="POST">
        <div class="form-group">
             <div>
                <label for="">ID de la Ficha:</label><br>
                <input type="number" name="ID_Ficha"><br>
            </div>

            <div>
                <label for="">Número de Ficha:</label><br>
                <input type="number" name="Numero_Ficha"><br>
            </div>

            <div>
                <label for="">Descripcion de Ficha:</label><br>
                <input type="text" name="Descripcion_Ficha"><br>
            </div>
        </div>
        <input type="submit" name="actualizarFicha" value="Actualizar Practica">
    </form>
    
</body>
</html>