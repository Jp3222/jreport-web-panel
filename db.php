<?php
session_start();
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'soapsc_db'
);

if (isset($conn)) {
    //echo "Conectado";
}else{
    //echo "Null";
}
?>