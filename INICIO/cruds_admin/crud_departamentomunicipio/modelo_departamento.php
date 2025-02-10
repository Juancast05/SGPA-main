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

function CrearDepartamento($ID_Departamentos, $Nombre_Departamento, $Descripcion_Departamento){
    AbrirConexion();
    global $conexion;

    $query = "INSERT INTO departamentos ( ID_Departamentos, Nombre_Departamento, Descripcion_Departamento)
    VALUES ('$ID_Departamentos', '$Nombre_Departamento', '$Descripcion_Departamento')";

    if ($conexion -> query($query) === TRUE) {
        CerrarConexion();
        return TRUE;
    } else {
        CerrarConexion();
        return "Hubo un error en la conexión: " . $conexion -> error;
    }
    
}

function ObtenerDepartamentos (){
    AbrirConexion();
    global $conexion;

    $query = "SELECT*FROM departamentos";
    $resultado = $conexion -> query($query);

    $departamentos = [];
    if ($resultado -> num_rows > 0) {
        while ($fila = $resultado -> fetch_assoc()) {
            $usuarios[] = $fila;
        }
    }
    return $departamentos;
}

function ObtenerDepartamento ($ID_Departamentos){
    AbrirConexion();
    global $conexion;

    $query = "SELECT*FROM departamentos WHERE ID_Departamentos = $ID_Departamentos";
    $resultado = $conexion -> query($query);
    CerrarConexion();
    return $resultado -> fetch_assoc();
}

function ActualizarDepartamento ($ID_Departamentos, $Nombre_Departamento, $Descripcion_Departamento){
    AbrirConexion();
    global $conexion;

    $query = "UPDATE departamentos SET Nombre_Departamento = '$Nombre_Departamento', Descripcion_Departamento = '$Descripcion_Departamento' WHERE ID_Departamentos = $ID_Departamentos";

    if ($conexion -> query($query) === TRUE) {
        CerrarConexion();
        return TRUE;
    } else {
        CerrarConexion();
        return "Hubo un error en la actualización: " . $conexion -> error;
    }
    
}

function EliminarDepartamento ($ID_Departamentos){
    AbrirConexion();
    global $conexion;

    $query = "DELETE FROM departamentos WHERE ID_Departamentos = $ID_Departamentos";

    if ($conexion -> query($query) === TRUE) {
        CerrarConexion();
        return TRUE;
    } else {
        CerrarConexion();
        return "Hubo un error en la eliminación: " . $conexion -> error;
    }   
}
?>