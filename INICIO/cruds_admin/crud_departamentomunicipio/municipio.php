<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Municipios</title>
</head>
<body>
    <h2>Crear Municipios</h2>
    <form action="./controlador_municipio.php" method="post">
        <input required type="number" name="ID_Municipio" placeholder="ID Municipio">
        <input required type="text" name="Nombre_Municipio" placeholder="Nombre Municipio">
        <input required type="text" name="Descripcion_Municipio" placeholder="Descripción Municipio">
        <input type="submit" name="CrearMunicipio" value="Crear">
    </form>
    <hr>
    <h2>Actualizar Municipio</h2>
    <form action="./controlador_municipio.php" method="post">
        <input required type="number" name="ID_Municipio" placeholder="ID a Actualizar">
        <input required type="text" name="Nombre_Municipio" placeholder="Nombre Nuevo">
        <input required type="text" name="Descripcion_Municipio" placeholder="Descripción Nueva">
        <input type="submit" name="ActualizarMunicipio" value="Actualizar">
    </form>
    <hr>
    <h2>Leer y Eliminar Municipio</h2>
    <table border="2">
        <tr>
            <th>ID's</th>
            <th>Nombres</th>
            <th>Descripciones</th>
            <th>Acciones</th>
        </tr>
        <?php
        include('./modelo_municipio.php');
        $municipios = ObtenerMunicipios();
        foreach ($municipios as $municipio) {
        ?>
        <tr>
            <td><?= $municipio['ID_Municipio']?></td>
            <td><?= $municipio['Nombre_Municipio']?></td>
            <td><?= $municipio['Descripcion_Municipio']?></td>
            <td>
                <form action="./controlador_municipio.php" method="post">
                    <input type="hidden" name="ID_Municipio" value="<?= $municipio['ID_Municipio']?>">
                    <input type="submit" name="EliminarMunicipio" value="Eliminar">
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