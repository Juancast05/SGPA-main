<?php

include ('./modelo_cargo.php');

if (isset($_POST['registrarCargo'])) {
    $Nombre_Cargo = $_POST['Nombre_Cargo'];
    $Descripcion_Cargo = $_POST['Descripcion_Cargo'];

    $resultado = registrarCargo($Nombre_Cargo, $Descripcion_Cargo);

    if ($resultado == TRUE) {
        header('location: ./registrar_cargo.php');
    }
    else {
        echo $resultado;
    }

}

if (isset($_POST['actualizarCargo'])) {
    $ID_Area = $_POST['ID_Cargo'];
    $Nombre_Cargo = $_POST['Nombre_Cargo'];
    $Descripcion_Cargo = $_POST['Descripcion_Cargo'];

    $resultado = actualizarCargo($ID_Cargo, $Nombre_Cargo, $Descripcion_Cargo);

    if ($resultado === TRUE) {
        header('location: ./registrar_cargo.php');
    } else {
        echo $resultado;
    }
}

if (isset($_POST['eliminarCargo'])) {
    $ID_Area = $_POST['ID_Cargo'];

    $resultado = eliminarCargo($ID_Cargo);

    if ($resultado === TRUE) {
        header('location: ./registrar_cargo.php');
    } else {
        echo $resultado;
    }
}



