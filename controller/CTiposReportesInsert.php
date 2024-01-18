<?php
require('../model/conexion.php');
$get = $_POST['tr_save'];
if (isset($get)) {
    $tipo = $_POST['campo_tipo'];
    $des = $_POST['campo_des'];
    $query = "INSERT INTO tipo_reportes(tipo,descripcion) values('$tipo','$des')";
    $res = $conexion->query($query);
    if (isset($res)) {
        $_SESSION['mensaje'] = "Datos guardados con exito";
        $_SESSION['mensaje-tipo'] = "success";
    } else {
        $_SESSION['mensaje'] = "Error en la operacion";
        $_SESSION['mensaje-tipo'] = "danger";
    }
    header("Location: ../view/VTiposReportes.php");
} else {
    echo "err";
}
