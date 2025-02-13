<?php

include ('./modelo_area.php');

if (isset($_POST['registrarArea'])) {
    $Nombre_Area = $_POST['Nombre_Area'];
    $Descripcion_Area = $_POST['Descripcion_Area'];

    $resultado = registrarArea($Nombre_Area, $Descripcion_Area);

    if ($resultado == TRUE) {
        header('location: ./registrar_area.php');
    }
    else {
        echo $resultado;
    }

}

if (isset($_POST['actualizarArea'])) {
    $ID_Area = $_POST['ID_Area'];
    $Nombre_Area = $_POST['Nombre_Area'];
    $Descripcion_Area = $_POST['Descripcion_Area'];

    $resultado = actualizarArea($ID_Area, $Nombre_Area, $Descripcion_Area);

    if ($resultado === TRUE) {
        header('location: ./registrar_area.php');
    } else {
        echo $resultado;
    }
}

if (isset($_POST['eliminarArea'])) {
    $ID_Area = $_POST['ID_Area'];

    $resultado = eliminarArea($ID_Area);

    if ($resultado === TRUE) {
        header('location: ./registrar_area.php');
    } else {
        echo $resultado;
    }
}



