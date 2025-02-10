<?php
include('./modelo_municipio.php');
if (isset($_POST['CrearMunicipio'])) {
    $ID_Municipio = $_POST['ID_Municipio'];
    $Nombre_Municipio = $_POST['Nombre_Municipio'];
    $Descripcion_Municipio = $_POST['Descripcion_Municipio'];

    $resultado = CrearMunicipio($ID_Municipio, $Nombre_Municipio, $Descripcion_Municipio);

    if ($resultado === TRUE) {
        header('location: ./municipio.php');
    } else {
        echo $resultado;
    }
    
}

if (isset($_POST['ActualizarMunicipio'])) {
    $ID_Municipio = $_POST['ID_Municipio'];
    $Nombre_Municipio = $_POST['Nombre_Municipio'];
    $Descripcion_Municipio = $_POST['Descripcion_Municipio'];

    $resultado = ActualizarMunicipio($ID_Municipio, $Nombre_Municipio, $Descripcion_Municipio);

    if ($resultado === TRUE) {
        header('location: ./municipio.php');
    } else {
        echo $resultado;
    }
}

if (isset($_POST['EliminarMunicipio'])) {
    $ID_Municipio = $_POST['ID_Municipio'];

    $resultado = EliminarMunicipio($ID_Municipio);

    if ($resultado === TRUE) {
        header('location: ./municipio.php');
    } else {
        echo $resultado;
    }
}
?>