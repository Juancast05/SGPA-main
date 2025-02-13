<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="jefe.css">
    <title>Listado Practicas</title>
</head>
<body>
<style>
       body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }
        h2 {
            color: #E76F1D;
            margin-bottom: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 800px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
            font-size: 0.9em;
        }
        th {
            background-color: #E76F1D;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .footer {
            margin-top: 20px;
            font-size: 0.8em;
            color: #888;
        }
    </style>
    <h2>Ver Coformadores</h2>
    <table border ="1">
        <tr>
            <th>ID Coformador</th>
            <th>Nombre Coformador</th>
            <th>Apellidos Coformador</th>
            <th>Correo Coformador</th>
            <th>Telefono</th>
        </tr>

        <?php
        include('./modelo_jefe.php');
        $coformadores = obtenerCoformadores();
        foreach ($coformadores as $coformador) {
        ?>
        <tr>
             <td><?=$coformador['ID_Coformador']?></td>
             <td><?=$coformador['Nombre_Coformador']?></td>
             <td><?=$coformador['Apellido_Coformador']?></td>
             <td><?=$coformador['Correo_Coformador']?></td>
             <td><?=$coformador['Telefono']?></td>
             <td>
                <form action="./controlador_jefe.php" method="POST">
                    <input type="hidden" name = "ID_Coformador" value="<?=$coformador['ID_Coformador']?>">
                    <input type="submit" name = "eliminarCoformador" value = "Eliminar">
                </form>
                <form action="./actualizar.php" method="POST">
                    <input type="hidden" name = "ID_Coformador" value="<?=$coformador['ID_Coformador']?>">
                    <a href="./actualizar.php"><input type="submit" value = "Actualizar"></a>
                </form>
             </td>
          </tr>
       <?php } ?>  
</table>      
</body>
</html>