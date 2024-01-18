<?php
require('../model/conexion.php');
$get = $_GET['id'];
if (isset($get)) {
    $id = $_GET['id'];

    $query = "DELETE FROM tipo_reportes where id = '$id'";
    $res = $conexion->query($query);
    if (isset($res)) {
        $_SESSION['mensaje'] = "Datos eliminados con exito";
        $_SESSION['mensaje-tipo'] = "warning";
    } else {
        $_SESSION['mensaje'] = "Error en la operacion";
        $_SESSION['mensaje-tipo'] = "danger";
    }
    header("Location: ../view/VTiposReportes.php");
} else {
    echo "err";
}
