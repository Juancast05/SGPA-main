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
            die("Error en la conexion" . $conexion->connect_error);
        }
    } catch (\Throwable $th) {
        throw $th->getMessage();
    }
}

function cerrarConexion(){
    global $conexion;
    $conexion->close();
}

function RegistrarCoformador($Nombre_Coformador,$Apellido_Coformador,$Correo_Coformador,$Telefono){
    global $conexion;
    abrirConexion();
    $query = "INSERT INTO coformadores(Nombre_Coformador,Apellido_Coformador,Correo_Coformador,Telefono)
    VALUES ('$Nombre_Coformador', '$Apellido_Coformador', '$Correo_Coformador', '$Telefono')";

    if ($conexion->query($query) === TRUE) {
        cerrarConexion();
        return TRUE;
    } else {
        $error = "Hubo un error en la insercion: " . $conexion->error;
        cerrarConexion();
        return $error;
    }

}

function obtenerCoformadores() {
    global $conexion;
    abrirConexion();
    $query = "SELECT * FROM coformadores";
    $resultado = $conexion->query($query);
    $coformadores = [];

    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            $coformadores[] = $fila;
        }       
      }
      cerrarConexion();
      return $coformadores;
    }

function actualizarCoformador($ID_Coformador,$Nombre_Coformador,$Apellido_Coformador,$Correo_Coformador,$Telefono) {
    global $conexion;
    abrirConexion();
    $query = "UPDATE coformadores SET Nombre_coformador  = '$Nombre_Coformador', Apellido_Coformador = '$Apellido_Coformador', Correo_Coformador = '$Correo_Coformador',
    Telefono = '$Telefono' WHERE ID_Coformador = $ID_Coformador";

    if ($conexion->query($query) === TRUE) {
        cerrarConexion();
        return TRUE;
    } else {
        $error = "Hubo un error al actualizar: " .$conexion->error;
        cerrarConexion();
        return $error;
    }
}

function eliminarCoformador($ID_Coformador) {
    global $conexion;
    abrirConexion();
    $query = "DELETE FROM coformadores WHERE ID_Coformador = $ID_Coformador";

    if ($conexion->query($query) === TRUE) {
        cerrarConexion();
        return TRUE;
    } else {
        $error = "Hubo un error al eliminar: " .$conexion->error;
        cerrarConexion();
        return $error;
    }
}