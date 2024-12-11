<?php require 'config.php'; ?>
<!-- Esta línea incluye el archivo 'config.php' que probablemente contiene configuraciones importantes, como las credenciales de la base de datos, conexión, etc. -->
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Declaración de tipo de documento HTML5 -->
    <meta charset="UTF-8">
    <!-- Establece el conjunto de caracteres a UTF-8, que permite la correcta visualización de caracteres especiales en español y otros idiomas -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Hace que la página sea responsiva y se ajuste a la pantalla del dispositivo móvil, asegurando que sea legible sin hacer zoom -->
    
    <title>Inicio de Sesión</title>
    <!-- El título que aparece en la pestaña del navegador cuando se carga la página -->
</head>
<body>
    <!-- El cuerpo del documento HTML -->
    
    <h2>Formulario de Inicio de Sesión</h2>
    <!-- Título principal de la página, que indica que es un formulario de inicio de sesión -->

    <!-- El formulario que envía datos mediante POST a 'iniciar_sesion.php' para autenticar al usuario -->
    <form action="iniciar_sesion.php" method="POST">
        <!-- 'action' especifica el archivo PHP que recibirá los datos del formulario (iniciar_sesion.php) -->
        <!-- 'method' indica que los datos se enviarán mediante el método POST -->

        <!-- Campo para ingresar el correo electrónico -->
        <label for="correo">Correo Electrónico:</label>
        <input type="email" name="correo" required>
        <!-- 'type="email"' asegura que el campo solo acepte una dirección de correo electrónico válida -->
        <!-- 'name="correo"' es el nombre del campo que será enviado al servidor -->
        <!-- 'required' indica que este campo es obligatorio -->

        <br><br> <!-- Salto de línea para dar espacio entre los campos -->

        <!-- Campo para ingresar la contraseña -->
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" required>
        <!-- 'type="password"' oculta los caracteres de la contraseña mientras el usuario los escribe -->
        <!-- 'name="contrasena"' es el nombre del campo de contraseña que se enviará al servidor -->
        <!-- 'required' hace que este campo también sea obligatorio -->

        <br><br> <!-- Otro salto de línea para el botón -->

        <!-- Botón de envío para iniciar sesión -->
        <button type="submit">Iniciar sesión</button>
        <!-- El botón de tipo 'submit' envía el formulario cuando se hace clic en él -->
    </form>
</body>
</html>
