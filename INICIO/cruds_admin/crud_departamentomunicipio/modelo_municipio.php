<?php
$conexion;

function AbrirConexion(){
    global $conexion;
    $db_direccion = "localhost";
    $db_nombre = "sgpa";
    $db_usuario = "root";
    $db_contrasena = "";

    try {
        $conexion = new mysqli ($db_direccion, $db_usuario, $db_contrasena, $db_nombre);
    } catch (\Throwable $th) {
        throw $th -> getMessage();
    }
}

function CerrarConexion(){
    global $conexion;
    $conexion -> close();
}

function CrearMunicipio($ID_Municipio, $Nombre_Municipio, $Descripcion_Municipio){
    AbrirConexion();
    global $conexion;

    $query = "INSERT INTO municipios ( ID_Municipio, Nombre_Municipio, Descripcion_Municipio)
    VALUES ('$ID_Municipio', '$Nombre_Municipio', '$Descripcion_Municipio')";

    if ($conexion -> query($query) === TRUE) {
        CerrarConexion();
        return TRUE;
    } else {
        CerrarConexion();
        return "Hubo un error en la conexión: " . $conexion -> error;
    }
    
}

function ObtenerMunicipios (){
    AbrirConexion();
    global $conexion;

    $query = "SELECT*FROM municipios";
    $resultado = $conexion -> query($query);

    $municipios = [];
    if ($resultado -> num_rows > 0) {
        while ($fila = $resultado -> fetch_assoc()) {
            $municipios[] = $fila;
        }
    }
    return $municipios;
}

function ObtenerMunicipio ($ID_Municipio){
    AbrirConexion();
    global $conexion;

    $query = "SELECT*FROM municipios WHERE ID_Municipio = $ID_Municipio";
    $resultado = $conexion -> query($query);
    CerrarConexion();
    return $resultado -> fetch_assoc();
}

function ActualizarMunicipio ($ID_Municipio, $Nombre_Municipio, $Descripcion_Municipio){
    AbrirConexion();
    global $conexion;

    $query = "UPDATE municipios SET Nombre_Municipio = '$Nombre_Municipio', Descripcion_Municipio = '$Descripcion_Municipio' WHERE ID_Municipio = $ID_Municipio";

    if ($conexion -> query($query) === TRUE) {
        CerrarConexion();
        return TRUE;
    } else {
        CerrarConexion();
        return "Hubo un error en la actualización: " . $conexion -> error;
    }
    
}

function EliminarMunicipio ($ID_Municipio){
    AbrirConexion();
    global $conexion;

    $query = "DELETE FROM municipios WHERE ID_Municipio = $ID_Municipio";

    if ($conexion -> query($query) === TRUE) {
        CerrarConexion();
        return TRUE;
    } else {
        CerrarConexion();
        return "Hubo un error en la eliminación: " . $conexion -> error;
    }   
}
?>