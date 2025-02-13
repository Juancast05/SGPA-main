<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ficha.css">
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
    <h2>Ver fichas</h2>
    <table border ="1">
        <tr>
            <th>ID Ficha</th>
            <th>Número de Ficha</th>
            <th>Descripción de Ficha</th>
            <th>Acciones</th>
        </tr>

        <?php
        include('./modelo_ficha.php');
        $fichas = obtenerFichas();
        foreach ($fichas as $ficha) {
        ?>
        <tr>
             <td><?=$ficha['ID_Ficha']?></td>
             <td><?=$ficha['Numero_Ficha']?></td>
             <td><?=$ficha['Descripcion_Ficha']?></td>
             <td>
                <form action="./controlador_ficha.php" method="POST">
                    <input type="hidden" name = "ID_Ficha" value="<?=$ficha['ID_Ficha']?>">
                    <input type="submit" name = "eliminarFicha" value = "Eliminar">
                </form>
                <form action="./actualizar.php" method="POST">
                    <input type="hidden" name = "ID_Ficha" value="<?=$ficha['ID_Ficha']?>">
                    <a href="./actualizar.php"><input type="submit" value = "Actualizar"></a>
                </form>
             </td>
          </tr>
       <?php } ?>  
</table>      
</body>
</html>