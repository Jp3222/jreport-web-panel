<?php

include("./db.php");

if (isset($_POST['xd'])) {
    
    $campo_test = $_POST['campo_test'];
    
    $query = "INSERT INTO test(texto) VALUES ('$campo_test')";
    
    $result = mysqli_query($conn, $query);

    if (!isset($result)) {
        die("Error");
    }

    $_SESSION['mensaje'] = "Tarea guardada con exito";
    $_SESSION['tipo_mensaje']="success";
    header("Location: ./index.php");
}

?>