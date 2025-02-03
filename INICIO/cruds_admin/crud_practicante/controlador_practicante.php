<?php

include ('./modelo_practicante.php');

if (isset($_POST['RegistrarPracticante'])) {
    $Tipo_Identificacion = $_POST['Tipo_Identificacion'];
    $Identificacion = $_POST['Identificacion'];
    $Nombre_Practicante = $_POST['Nombre_Practicante'];
    $Apellido_Practicante = $_POST['Apellido_Practicante'];
    $Fecha_Nacimiento = $_POST['Fecha_Nacimiento'];
    $Pais_Nacimiento = $_POST['Pais_Nacimiento'];
    $Departamento_Nacimiento = $_POST['Departamento_Nacimiento'];
    $Ciudad_Nacimiento = $_POST['Ciudad_Nacimiento'];
    $Correo_Personal = $_POST['Correo_Personal'];
    $Correo_Sena = $_POST['Correo_Sena'];
    $Telefono = $_POST['Telefono'];

    $resultado = RegistrarPracticante($Tipo_Identificacion,$Identificacion,$Nombre_Practicante,$Apellido_Practicante,$Fecha_Nacimiento,$Pais_Nacimiento,
    $Departamento_Nacimiento,$Ciudad_Nacimiento,$Correo_Personal,$Correo_Sena,$Telefono);

    if ($resultado == TRUE) {
        header('location: ./registrar_practicante.php');
    }
    else {
        echo $resultado;
    }

}

if (isset($_POST['actualizarPracticante'])) {
    $id = $_POST['ID_Practicante'];
    $tipo_identificacion = $_POST['Tipo_Identificacion'];
    $identificacion = $_POST['Identificacion'];
    $nombre = $_POST['Nombre_Practicante'];
    $apellido = $_POST['Apellido_Practicante'];
    $Fecha_Nacimiento = $_POST['Fecha_Nacimiento'];
    $Pais_Nacimiento = $_POST['Pais_Nacimiento'];
    $Departamento_Nacimiento = $_POST['Departamento_Nacimiento'];
    $Ciudad_Nacimiento = $_POST['Ciudad_Nacimiento'];
    $Correo_Personal = $_POST['Correo_Personal'];
    $Correo_Sena = $_POST['Correo_Sena'];
    $Telefono = $_POST['Telefono'];

    $resultado = actualizarPracticante($id,$tipo_identificacion,$identificacion,$nombre,$apellido,$Fecha_Nacimiento,$Pais_Nacimiento,$Departamento_Nacimiento,
    $Ciudad_Nacimiento,$Correo_Personal,$Correo_Sena,$Telefono);

    if ($resultado === TRUE) {
        header('location: ./registrar_practicante.php');
    } else {
        echo $resultado;
    }
}

if (isset($_POST['eliminarPracticante'])) {
    $ID_Practicante = $_POST['ID_Practicante'];

    $resultado = eliminarPracticante($ID_Practicante);

    if ($resultado === TRUE) {
        header('location: ./registrar_practicante.php');
    } else {
        echo $resultado;
    }
}



