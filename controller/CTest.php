<?php
$conexion = new mysqli('localhost', 'root', '', 'soapsc_db');

if (isset($_GET['action']) and strcmp($_GET['action'], "dl") == 0) {
    $id = $_GET['id'];
    $query = "DELETE FROM test WHERE id = $id";
    $result = $conexion->query($query);
    if (!$result) {
        die("error");
    }
    $_SESSION['mensaje'] = "Tarea eliminada con exito";
    $_SESSION['tipo_mensaje'] = "success";

} elseif (isset($_POST['save_test'])) {
    $campo_test = $_POST['campo_test'];

    $query = "INSERT INTO test(texto) VALUES ('$campo_test')";

    $result = $conexion -> query($query);
    
    if (!$result) {
        die("Error");
    }

    $_SESSION['mensaje'] = "Tarea guardada con exito";
    $_SESSION['tipo_mensaje'] = "success";
}else{
    echo "nan";
}

header("Location: ../");
