<?php
include('./modelo.php');
if (isset($_POST['CrearDepartamento'])) {
    $ID_Departamentos = $_POST['ID_Departamentos'];
    $Nombre_Departamento = $_POST['Nombre_Departamento'];
    $Descripcion_Departamento = $_POST['Descripcion_Departamento'];

    $resultado = CrearDepartamento($ID_Departamentos, $Nombre_Departamento, $Descripcion_Departamento);

    if ($resultado === TRUE) {
        header('location: ./departamento.php');
    } else {
        echo $resultado;
    }
    
}

if (isset($_POST['ActualizarDepartemento'])) {
    $ID_Departamentos = $_POST['ID_Departamentos'];
    $Nombre_Departamento = $_POST['Nombre_Departamento'];
    $Descripcion_Departamento = $_POST['Descripcion_Departamento'];

    $resultado = ActualizarDepartamento($ID_Departamentos, $Nombre_Departamento, $Descripcion_Departamento);

    if ($resultado === TRUE) {
        header('location: ./departamento.php');
    } else {
        echo $resultado;
    }
}

if (isset($_POST['EliminarDepartamento'])) {
    $ID_Departamentos = $_POST['ID_Departamentos'];

    $resultado = EliminarDepartamento($ID_Departamentos);

    if ($resultado === TRUE) {
        header('location: ./departamento.php');
    } else {
        echo $resultado;
    }
}
?>