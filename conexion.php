<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $bd = "crud";

    $conn = mysqli_connect($host, $user, $password, $bd);

    if (!$conn) {
        die("Error de conexión: " . mysqli_connect_error());
    }
?>