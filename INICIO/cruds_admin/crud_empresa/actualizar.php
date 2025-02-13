<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="empresa.css">
    <title>Actualizar Empresa</title>
</head>
<body>
    <h1>Actualizar Empresa</h1>
    <form action="./controlador_empresa.php" method="POST">
        <div class="form-group">
             <div>
                <label for="">ID de la Empresa:</label><br>
                <input type="number" name="ID_Empresa"><br>
            </div>

            <div>
                <label for="">NIT:</label><br>
                <input type="number" name="NIT"><br>
            </div>

            <div>
                <label for="">Nombre de Empresa:</label><br>
                <input type="text" name="Nombre_Empresa"><br>
            </div>

            <div>
                <label for="">Direccion:</label><br>
                <input type="text" name="Direccion"><br>
            </div>

            <div><label for="">Telefono de Empresa:</label><br>
                <input type="text" name="Telefono_Empresa"><br>
            </div>

            <div>
                <label for="">Correo de Empresa:</label><br>
                <input type="text" name="Correo_Empresa"><br>
            </div>
        </div>
        <input type="submit" name="actualizarEmpresa" value="Actualizar Practica">
    </form>
    
</body>
</html>