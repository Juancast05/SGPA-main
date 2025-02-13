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

function registrarCargo($Nombre_Cargo, $Descripcion_Cargo){
    global $conexion;
    abrirConexion();
    $query = "INSERT INTO cargos (Nombre_Cargo, Descripcion_Cargo)
    VALUES ('$Nombre_Cargo', '$Descripcion_Cargo')";

    if ($conexion->query($query) === TRUE) {
        cerrarConexion();
        return TRUE;
    } else {
        $error = "Hubo un error en la inserción: " . $conexion->error;
        cerrarConexion();
        return $error;
    }
}

function obtenerCargo() {
    global $conexion;
    abrirConexion();
    $query = "SELECT * FROM cargos";
    $resultado = $conexion->query($query);
    $cargos = [];

    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            $cargos[] = $fila;
        }       
      }
      cerrarConexion();
      return $cargos;
    }

function actualizarCargo($ID_Cargo, $Nombre_Cargo, $Descripcion_Cargo){
    global $conexion;
    abrirConexion();
    $query = "UPDATE cargos SET Nombre_Cargos = '$Nombre_Cargo', Descripcion_Cargo = '$Descripcion_Cargo' WHERE ID_Cargo = $ID_Cargo";
    if ($conexion->query($query)===TRUE) {
        cerrarConexion();
        return TRUE;
    } else {
      $error = "Hubo un error al actualizar: " . $conexion->error;
      cerrarConexion();
      return $error;
    }
}

function eliminarCargo($ID_Cargo) {
    global $conexion;
    abrirConexion();
    $query = "DELETE FROM cargos WHERE ID_Cargo = $ID_Cargo";
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