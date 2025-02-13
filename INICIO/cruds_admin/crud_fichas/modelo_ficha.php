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
            die("Error en la conexion: ". $conexion->connect_error);
        }
    } catch (\Throwable $th) {
        throw $th->getMessage();
    }
}

function cerrarConexion(){
    global $conexion;
    $conexion->close();
}

function registrarFicha($Numero_Ficha,$Descripcion_Ficha){
    global $conexion;
    abrirConexion();
    $query = "INSERT INTO fichas (Numero_Ficha,Descripcion_Ficha) VALUES ('$Numero_Ficha','$Descripcion_Ficha')";

    if ($conexion->query($query) === TRUE) {
        cerrarConexion();
        return TRUE;
    } else {
        $error = "Hubo un error en la inserción: " .$conexion->error;
        cerrarConexion();
        return $error;
    }
}

function obtenerFichas() {
    global $conexion;
    abrirConexion();
    $query = "SELECT * FROM fichas";
    $resultado = $conexion->query($query);
    $fichas = [];

    if ($resultado->num_rows >0) {
        while ($fila = $resultado->fetch_assoc()){
            $fichas[] = $fila;
        }
    }
    cerrarConexion();
    return $fichas;
}

function actualizarFicha($ID_Ficha,$Numero_Ficha,$Descripcion_Ficha){
    global $conexion;
    abrirConexion();
    $query = "UPDATE fichas SET Numero_ficha = '$Numero_Ficha', Descripcion_Ficha = '$Descripcion_Ficha' WHERE ID_FIcha = $ID_Ficha";
    if ($conexion->query($query) === TRUE) {
        cerrarConexion();
        return TRUE;
    } else {
        $error = "Hubo un error al actualizar: ". $conexion->error;
        cerrarConexion();
        return $error;
    }
}

function eliminarFicha($ID_Ficha){
    global $conexion;
    abrirConexion();
    $query = "DELETE FROM fichas WHERE ID_Ficha = $ID_Ficha";

    if ($conexion->query($query) === TRUE) {
        cerrarConexion();
        return TRUE;
    } else {
        $error = "Hubo un error al eliminar: ". $conexion->error;
        cerrarConexion();
        return $error;
    }

}