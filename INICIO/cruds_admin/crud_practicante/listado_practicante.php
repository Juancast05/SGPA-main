<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="practicante.css">
    <title>Listado practicantes</title>
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
        }
        h2 {
            color: #E76F1D;
            margin-bottom: 20px;
        }
        table {
            border-collapse: collapse;
            width: 90%;
            max-width: 1200px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
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
            margin-top: 30px;
            font-size: 0.9em;
            color: #888;
        }
    </style>
    <h2>Ver practicantes</h2>
    <table border ="1">
        <tr>
            <th>ID Practicante</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Tipo de Identificacion</th>
            <th>Identificacion</th>
            <th>Fecha de Nacimiento</th>
            <th>Pais de Nacimiento</th>
            <th>Departamento de Nacimiento</th>
            <th>Ciudad de Nacimiento</th>
            <th>Correo Personal</th>
            <th>Correo Sena</th>
            <th>Telefono</th>
        </tr>

        <?php
        include('./modelo_practicante.php');
        $practicantes = obtenerPracticantes();
        foreach ($practicantes as $practicante) {
        ?>
        <tr>
             <td><?=$practicante['ID_Practicante']?></td>
             <td><?=$practicante['Nombre_Practicante']?></td>
             <td><?=$practicante['Apellido_Practicante']?></td>
             <td><?=$practicante['Tipo_Identificacion']?></td>
             <td><?=$practicante['Identificacion']?></td>
             <td><?=$practicante['Fecha_Nacimiento']?></td>
             <td><?=$practicante['Pais_Nacimiento']?></td>
             <td><?=$practicante['Departamento_Nacimiento']?></td>
             <td><?=$practicante['Ciudad_Nacimiento']?></td>
             <td><?=$practicante['Correo_Personal']?></td>
             <td><?=$practicante['Correo_Sena']?></td>
             <td><?=$practicante['Telefono']?></td>
             
          </tr>
       <?php } ?>  
</table>      
</body>
</html>