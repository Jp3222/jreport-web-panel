<?php
require('../model/conexion.php');
$get = $_POST['tr_edit'];
if (isset($get)) {
    $tipo = $_POST['campo_tipo'];
    $des = $_POST['campo_des'];
    $id = $_POST['campo_id'];

    $query = "UPDATE tipo_reportes SET tipo ='$tipo', descripcion='$des' where id = '$id'";
    $res = $conexion->query($query);

    if (isset($res)) {
        $_SESSION['mensaje'] = "Datos registrados con exito";
        $_SESSION['mensaje-tipo'] = "success";
    } else {
        $_SESSION['mensaje'] = "Error en la operacion";
        $_SESSION['mensaje-tipo'] = "danger";
    }
    header("Location: ../view/VTiposReportes.php");
} else {
    echo "err";
}
