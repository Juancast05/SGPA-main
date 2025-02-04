<?php

include ('./modelo_practica.php');

if (isset($_POST['registrarPractica'])) {
    $fecha__inicio = $_POST['Fecha_Inicio'];
    $fecha_fin = $_POST['Fecha_Fin'];
    $fecha_seguimiento = $_POST['Fecha_Seguimiento'];
    $observaciones = $_POST['Observaciones'];
    $continuidad = $_POST['Continuidad'];

    $resultado = RegistrarPractica($fecha__inicio,$fecha_fin,$fecha_seguimiento,$observaciones,$continuidad);

    if ($resultado === TRUE) {
        header('location: ./registrar_practica.php');
    } else {
        echo $resultado;
    }
}