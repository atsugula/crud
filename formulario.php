<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar</title>
</head>
<body>
    <h2>Crear</h2>
    <form method="post" action="agregar.php">
        <label>Nombre:</label>
        <input type="text" name="name" required>
        <br>
        <label>Apellido:</label>
        <input type="text" name="last_name" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" required>
        <br>
        <label>Phone:</label>
        <input type="text" name="phone" required>
        <br>
        <input type="submit" value="Crear">
    </form>
</body>
</html>