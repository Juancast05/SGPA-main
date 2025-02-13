<?php

include('./modelo_empresa.php');

if (isset($_POST['registrarEmpresa'])) {
    $NIT = $_POST['NIT'];
    $Nombre_Empresa = $_POST['Nombre_Empresa'];
    $Direccion = $_POST['Direccion'];
    $Telefono_Empresa = $_POST['Telefono_Empresa'];
    $Correo_Empresa = $_POST['Correo_Empresa'];

    $resultado = registrarEmpresa($NIT,$Nombre_Empresa,$Direccion,$Telefono_Empresa,$Correo_Empresa);

    if ($resultado === TRUE) {
        header('location: ./registrar_empresa.php');
    }
    else {
        echo $resultado;
    }
}

if (isset($_POST['actualizarEmpresa'])) {
    $ID_Empresa = $_POST['ID_Empresa'];
    $NIT = $_POST['NIT'];
    $Nombre_Empresa = $_POST['Nombre_Empresa'];
    $Direccion = $_POST['Direccion'];
    $Telefono_Empresa = $_POST['Telefono_Empresa'];
    $Correo_Empresa = $_POST['Correo_Empresa'];

    $resultado = actualizarEmpresa($ID_Empresa,$NIT,$Nombre_Empresa,$Direccion,$Telefono_Empresa,$Correo_Empresa);

    if ($resultado === TRUE) {
        header('location: ./registrar_empresa.php');
    } else {
        echo $resultado;
    }

}

if (isset($_POST['eliminarEmpresa'])) {
    $ID_Empresa = $_POST['ID_Empresa'];

    $resultado = eliminarEmpresa($ID_Empresa);

    if ($resultado === TRUE) {
        header('location: ./registrar_empresa.php');
    } else {
        echo $resultado;
    }
}





