<?php

$conexion;

function abrirConexion() {
    global $conexion; 
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "sgpa";

    try {
      $conexion = new mysqli($db_host,$db_user,$db_pass,$db_name);
      if ($conexion->connect_error) {
        die("Error en la conexión: " . $conexion->connect_error);
      }
    } catch (\Throwable $th) {
        throw $th->getMessage();
    }
}

function cerrarConexion() {
    global $conexion;
    $conexion->close();
}

function RegistrarPracticante($Tipo_Identificacion,$Identificacion,$Nombre_Practicante,$Apellido_Practicante,$Fecha_Nacimiento,$Pais_Nacimiento,$Departamento_Nacimiento,$Ciudad_Nacimiento,$Correo_Personal,$Correo_Sena,$Telefono){
    global $conexion;
    abrirConexion();
    $query = "INSERT INTO practicantes (Tipo_Identificacion,Identificacion,Nombre_Practicante,Apellido_Practicante,Fecha_Nacimiento,Pais_Nacimiento,Departamento_Nacimiento,Ciudad_Nacimiento,Correo_Personal,Correo_Sena,Telefono)
    VALUES ('$Tipo_Identificacion', '$Identificacion', '$Nombre_Practicante', '$Apellido_Practicante', '$Fecha_Nacimiento', '$Pais_Nacimiento', '$Departamento_Nacimiento', '$Ciudad_Nacimiento', '$Correo_Personal', '$Correo_Sena', '$Telefono')";

    if ($conexion->query($query) === TRUE) {
        cerrarConexion();
        return TRUE;
    } else {
        $error = "Hubo un error en la inserción: " . $conexion->error;
        cerrarConexion();
        return $error;
    }
}

function obtenerPracticantes() {
    global $conexion;
    abrirConexion();
    $query = "SELECT * FROM practicantes";
    $resultado = $conexion->query($query);
    $practicantes = [];

    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            $practicantes[] = $fila;
        }       
      }
      cerrarConexion();
      return $practicantes;
    }

function actualizarPracticante($ID_Practicante,$Tipo_Identificacion,$Identificacion,$Nombre_Practicante,$Apellido_Practicante,$Fecha_Nacimiento,$Pais_Nacimiento,$Departamento_Nacimiento,$Ciudad_Nacimiento,$Correo_Personal,$Correo_Sena,$Telefono){
    global $conexion;
    abrirConexion();
    $query = "UPDATE practicantes SET Tipo_Identificacion = '$Tipo_Identificacion', Identificacion = '$Identificacion', Nombre_Practicante = '$Nombre_Practicante', Apellido_Practicante = '$Apellido_Practicante', Fecha_Nacimiento = '$Fecha_Nacimiento', Pais_Nacimiento = '$Pais_Nacimiento', Departamento_Nacimiento = '$Departamento_Nacimiento', Correo_Personal = '$Correo_Personal',
    Correo_Sena = '$Correo_Sena', Telefono = '$Telefono' WHERE ID_Practicante = $ID_Practicante";
    if ($conexion->query($query)===TRUE) {
        cerrarConexion();
        return TRUE;
    } else {
      $error = "Hubo un error al actualizar: " . $conexion->error;
      cerrarConexion();
      return $error;
    }
}

function eliminarPracticante($ID_Practicante) {
    global $conexion;
    abrirConexion();
    $query = "DELETE FROM practicantes WHERE ID_Practicante = $ID_Practicante";
    if ($conexion->query($query) === TRUE) {
        cerrarConexion();
        return TRUE;
    } else {
        $error = "Hubo un error al eliminar: " .$conexion->error;
        cerrarConexion();
        return $error;
    }

}

?>



