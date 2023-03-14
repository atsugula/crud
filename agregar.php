<?php
include "conexion.php";

$name = $_POST["name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$phone = $_POST["phone"];

$sql = "INSERT INTO usuarios (name, last_name, email, phone)
        VALUES ('$name', '$last_name', '$email', '$phone')";

if (mysqli_query($conn, $sql)) {
    echo "Registro agregado exitosamente";
} else {
    echo "Error al agregar el registro: " . mysqli_error($conn);
}

mysqli_close($conn);
?>