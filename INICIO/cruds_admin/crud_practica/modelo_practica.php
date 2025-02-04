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
        if ($conexion ->connect_error) {
            die("Error en la conexion: " . $conexion->connect_error);
        }
    } catch (\Throwable $th) {
        throw $th->getMessage();
    }
}

function cerrarConexion() {
    global $conexion;
    $conexion->close();
}

function registrarPractica($Fecha_Inicio,$Fecha_Fin,$Fecha_Seguimiento,$Observaciones,$continuidad) {
    global $conexion;
    abrirConexion();
    $query = "INSERT INTO practicas(Fecha_inicio,Fecha_fin,Fecha_Seguimiento,Observaciones,Continuidad)
    VALUES ('$Fecha_Inicio','$Fecha_Fin',$Fecha_Seguimiento,'$Observaciones','$continuidad')";

    if ($conexion->query($query) === TRUE) {
        cerrarConexion();
        return TRUE;
    } else {
        $error = "Hubo un error en la inserción: " .$conexion->error;
        cerrarConexion();
        return $error;
    }
}

function obtenerPracticas() {
    global $conexion;
    abrirConexion();
    $query = "SELECT * FROM practicas";
    $resultado = $conexion->query($query);
    $practicas = [];

    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            $practicas[] = $fila;
        }
    }
    cerrarConexion();
    return $practicas;
}