<?php
include("db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM test where id = $id";

    $result = mysqli_query($conn, $query);

    if (!isset($result)) {
        die("error");
    }

    $_SESSION['mensaje'] = "Tarea eliminada con exito";
    $_SESSION['tipo_mensaje'] = "danger";
    header("Location: ./index.php");
}
