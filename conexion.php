<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $bd = "crud";

    $conexion = mysqli_connect($host, $user, $password, $bd);

    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }
?>