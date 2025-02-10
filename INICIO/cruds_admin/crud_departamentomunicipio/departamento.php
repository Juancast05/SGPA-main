<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamentos</title>
</head>
<body>
    <h2>Crear Departamentos</h2>
    <form action="./controlador_departamento.php" method="post">
        <input required type="number" name="ID_Departamentos" placeholder="ID Departamento">
        <input required type="text" name="Nombre_Departamento" placeholder="Nombre Departamento">
        <input required type="text" name="Descripcion_Departamento" placeholder="Descripción Departamento">
        <input type="submit" name="CrearDeparatemnto" value="Crear">
    </form>
    <hr>
    <h2>Actualizar Departamento</h2>
    <form action="./controlador_departamento.php" method="post">
        <input required type="number" name="ID_Departamentos" placeholder="ID a Actualizar">
        <input required type="text" name="Nombre_Departamento" placeholder="Nombre Nuevo">
        <input required type="text" name="Descripcion_Departamento" placeholder="Descripción Nueva">
        <input type="submit" name="ActualizarDepartamento" value="Actualizar">
    </form>
    <hr>
    <h2>Leer y Eliminar Departamentos</h2>
    <table border="2">
        <tr>
            <th>ID's</th>
            <th>Nombres</th>
            <th>Descripciones</th>
            <th>Acciones</th>
        </tr>
        <?php
        include('./modelo_departamento.php');
        $departamentos = ObtenerDepartamentos();
        foreach ($departamentos as $departamento) {
        ?>
        <tr>
            <td><?= $departamento['ID_Departamentos']?></td>
            <td><?= $departamento['Nombre_Departamento']?></td>
            <td><?= $departamento['Descripcion_Departamento']?></td>
            <td>
                <form action="./controlador.php" method="post">
                    <input type="hidden" name="ID_Departamentos" value="<?= $departamento['ID_Departamentos']?>">
                    <input type="submit" name="EliminarDepartamento" value="Eliminar">
                </form>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
    <hr>
</body>
</html>