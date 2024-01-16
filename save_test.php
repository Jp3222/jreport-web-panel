<?php

include("./db.php");

if (isset($_POST['save_test'])) {
    
    $campo_test = $_POST['campo_test'];
    $query = "INSERT INTO test(test) VALUES ('$campo_test')";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "error";
    }

    header("./index.php");
}
?>