<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="practica.css">
    <title>Actualizar Datos</title>
</head>
<body>
    <h1>Actualizar Practicas</h1>
    <form action="./controlador_practica.php" method="POST">
        <div class="form-group">
             <div>
                <label for="">ID de la Practica:</label><br>
                <input type="number" name="ID_Practica"><br>
            </div>

            <div>
                <label for="">Fecha_Inicio:</label><br>
                <input type="date" name="Fecha_Inicio"><br>
            </div>

            <div>
                <label for="">Fecha_Fin:</label><br>
                <input type="date" name="Fecha_Fin"><br>
            </div>

            <div>
                <label for="">Fecha Seguimiento:</label><br>
                <input type="date" name="Fecha_Seguimiento"><br>
            </div>

            <div><label for="">Observaciones:</label><br>
                <input type="text" name="Observaciones"><br>
            </div>

            <div>
                <label for="">Continuidad:</label><br>
                <input type="text" name="Continuidad"><br>
            </div>
        </div>
        <input type="submit" name="actualizarPractica" value="Actualizar Practica">
    </form>
    
</body>
</html>