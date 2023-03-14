<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <a href="formulario.php">Crear</a>
    <table border="1">
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Email</th>
			<th>Telefono</th>
			<th>Acciones</th>
		</tr>
        <?php
            include "conexion.php";
            $result = mysqli_query($conexion, "SELECT * FROM users");
            if ($result->num_rows > 0){
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["last_name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["phone"] . "</td>";
                    echo "</tr>";
                    echo "<a href='formulario.php?id=" . $row['id'] . "'>Leer</a> ";
                    echo "<a href='formulario.php?id=" . $row['id'] . "'>Actualizar</a> ";
                }
            } else {
                echo 'No hay datos.';
            }
        ?>
    </table>
</body>
</html>