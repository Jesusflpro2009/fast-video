<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
</head>
<body>
    <h2>Registrarse</h2>
    
    <!-- Aquí puedes agregar un formulario de registro -->
    <form action="register_handler.php" method="post">
        <!-- Campos del formulario (por ejemplo, usuario, contraseña y correo electrónico) -->
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>

        <!-- Botón de envío del formulario -->
        <input type="submit" value="Registrarse">
    </form>
</body>
</html>
