<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="practicante.css">
    <title>Actualizar Datos</title>
</head>
<body>
    <h1>Actualizar Practicantes</h1>
    <form action="./controlador_practicante.php" method="POST">
        <div class="form-group">
             <div>
                <label for="">ID del Practicante:</label><br>
                <input type="number" name="ID_Practicante"><br>
            </div>

            <div>
                <label for="">Nombres del Practicante:</label><br>
                <input type="text" name="Nombre_Practicante"><br>
            </div>

            <div>
                <label for="">Apellidos del Practicante:</label><br>
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
        <input type="submit" name="actualizarPracticante" value="Actualizar Practicante">
    </form>
    
</body>
</html>