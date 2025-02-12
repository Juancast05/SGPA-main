<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="practica.css">
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
    <h2>Ver Practicas</h2>
    <table border ="1">
        <tr>
        <th>ID Practica</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Fecha Seguimiento</th>
            <th>Observaciones</th>
            <th>Continuidad</th>
        </tr>

        <?php
        include('./modelo_practica.php');
        $practicas = obtenerPracticas();
        foreach ($practicas as $practica) {
        ?>
        <tr>
             <td><?=$practica['ID_Practica']?></td>
             <td><?=$practica['Fecha_Inicio']?></td>
             <td><?=$practica['Fecha_Fin']?></td>
             <td><?=$practica['Fecha_Seguimiento']?></td>
             <td><?=$practica['Observaciones']?></td>
             <td><?=$practica['Continuidad']?></td>
             <td>
             
          </tr>
       <?php } ?>  
</table>      
</body>
</html>