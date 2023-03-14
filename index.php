<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <?php
        include "conexion.php";
        $result = mysqli_query($conexion, "SELECT * FROM users");
        if ($result->num_rows > 0){
            echo "<table>";
            echo "<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Email</th><th>Teléfono</th></tr>";
            
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["last_name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["phone"] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo 'No hay datos.';
        }
        
    ?>
</body>
</html>