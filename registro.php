<?php require 'config.php'; ?>
<!-- Incluye el archivo 'config.php' que probablemente contiene la configuración de la base de datos y otras configuraciones importantes -->

<!DOCTYPE html>
<html lang="es">
<head>
    <!-- El encabezado del documento HTML -->

    <meta charset="UTF-8">
    <!-- Define el conjunto de caracteres a UTF-8, lo cual es importante para la correcta visualización de caracteres especiales, como tildes y eñes, en español. -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Hace que la página sea responsiva, es decir, se ajuste a diferentes tamaños de pantalla, especialmente para dispositivos móviles. -->

    <title>Registro de Usuario</title>
    <!-- Define el título de la página que aparece en la pestaña del navegador. -->
</head>
<body>
    <!-- El cuerpo del documento HTML -->

    <h2>Formulario de Registro</h2>
    <!-- Título principal que indica que la página es para el registro de un nuevo usuario -->

    <!-- El formulario que permite registrar un nuevo usuario -->
    <form action="registrar_usuario.php" method="POST">
        <!-- 'action="registrar_usuario.php"' indica que los datos del formulario se enviarán al archivo 'registrar_usuario.php' cuando se haga clic en el botón de enviar -->
        <!-- 'method="POST"' indica que los datos del formulario se enviarán mediante el método POST, lo que mantiene la seguridad al ocultar los datos en el cuerpo de la solicitud. -->

        <!-- Campo para ingresar el nombre del usuario -->
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
        <!-- 'type="text"' define que el campo es de texto -->
        <!-- 'name="nombre"' es el nombre del campo que se usará para enviar el dato al servidor -->
        <!-- 'required' hace que este campo sea obligatorio para el formulario -->
        
        <br><br> <!-- Salto de línea para separar los campos de entrada -->

        <!-- Campo para ingresar el correo electrónico del usuario -->
        <label for="correo">Correo Electrónico:</label>
        <input type="email" name="correo" required>
        <!-- 'type="email"' asegura que el campo acepte solo un correo electrónico válido -->
        <!-- 'name="correo"' es el nombre del campo para enviar el correo al servidor -->
        <!-- 'required' hace que este campo también sea obligatorio -->

        <br><br> <!-- Otro salto de línea para separar los campos -->

        <!-- Campo para ingresar la contraseña -->
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" required>
        <!-- 'type="password"' asegura que los caracteres de la contraseña se muestren como asteriscos o puntos -->
        <!-- 'name="contrasena"' es el nombre del campo de la contraseña que se enviará al servidor -->
        <!-- 'required' hace que este campo sea obligatorio también -->

        <br><br> <!-- Salto de línea para dar espacio antes del botón -->

        <!-- Botón de envío para registrar al usuario -->
        <button type="submit">Registrar</button>
        <!-- El botón 'submit' envía el formulario cuando se hace clic en él -->
    </form>

</body>
</html>
