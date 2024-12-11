<?php
// Inicia una nueva sesión o reanuda la existente
session_start(); 

// Si el usuario ya está autenticado (es decir, tiene una sesión activa)
if (isset($_SESSION['usuario_id'])) {
    // Redirige al usuario a la página principal, ya que no necesita ver el formulario de inicio de sesión/registro
    header('Location: principal.php'); 
    // Detiene la ejecución del script después de la redirección
    exit(); 
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Define la codificación de caracteres como UTF-8, útil para caracteres especiales en español -->
    <meta charset="UTF-8"> 
    <!-- Hace que la página sea responsiva en dispositivos móviles ajustando el ancho según el dispositivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <!-- Título de la página que aparece en la pestaña del navegador -->
    <title>Inicio de sesión / Registro</title>
    <!-- Enlace al archivo de estilos CSS personalizado -->
    <link rel="stylesheet" href="style.css">
    <!-- Enlace a Bootstrap desde un CDN para utilizar sus estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJ3QwzJ6f5jL6P4BO1C1t7pah6Wz6gUoVpU5L1hz1+oO4cs4GF5AJeM4kAhm" crossorigin="anonymous">
</head>
<body>

    <!-- Contenedor principal para el formulario de inicio de sesión o registro -->
    <div class="form-container">
        <!-- Título principal de la página -->
        <h2>Iniciar sesión o Registro</h2>
        
        <!-- Formulario de inicio de sesión, inicialmente visible -->
        <form id="loginForm" class="active" action="iniciar_sesion.php" method="POST">
            <!-- Campo para ingresar el correo electrónico -->
            <label for="correo">Correo Electrónico:</label>
            <input type="email" name="correo" required><br><br>
            
            <!-- Campo para ingresar la contraseña -->
            <label for="contrasena">Contraseña:</label>
            <input type="password" name="contrasena" required><br><br>
            
            <!-- Botón de envío para iniciar sesión -->
            <button type="submit">Iniciar sesión</button>
            <!-- Enlace para alternar al formulario de registro -->
            <p class="toggle-link" onclick="toggleForms('register')">¿No tienes cuenta? Regístrate aquí</p>
        </form>

        <!-- Formulario de registro, inicialmente oculto -->
        <form id="registerForm" action="registrar_usuario.php" method="POST">
            <!-- Campo para ingresar el nombre del nuevo usuario -->
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required><br><br>
            
            <!-- Campo para ingresar el correo electrónico -->
            <label for="correo">Correo Electrónico:</label>
            <input type="email" name="correo" required><br><br>

            <!-- Campo para ingresar la contraseña -->
            <label for="contrasena">Contraseña:</label>
            <input type="password" name="contrasena" required><br><br>

            <!-- Botón de envío para registrar al nuevo usuario -->
            <button type="submit">Registrar</button>
            <!-- Enlace para alternar al formulario de inicio de sesión -->
            <p class="toggle-link" onclick="toggleForms('login')">¿Ya tienes cuenta? Inicia sesión aquí</p>
        </form>
    </div>

    <!-- Script JavaScript para alternar entre los formularios de inicio de sesión y registro -->
    <script>
        // Función para alternar entre los formularios de login y registro
        function toggleForms(formType) {
            // Si el tipo de formulario es 'register', ocultamos el formulario de login y mostramos el de registro
            if (formType === 'register') {
                document.getElementById('loginForm').classList.remove('active'); // Oculta el formulario de login
                document.getElementById('registerForm').classList.add('active'); // Muestra el formulario de registro
            } else {
                // Si el tipo de formulario es 'login', ocultamos el formulario de registro y mostramos el de login
                document.getElementById('registerForm').classList.remove('active'); // Oculta el formulario de registro
                document.getElementById('loginForm').classList.add('active'); // Muestra el formulario de login
            }
        }
    </script>

    <!-- Enlace a Bootstrap JS desde un CDN para utilizar componentes interactivos -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-7r7P03LphKl9XzwjbJHZvsDYu1AeyEJdSgaIEP2Pv0I1pXr0JJjw5zJ7mj5lOhAv" crossorigin="anonymous"></script>

</body>
</html>
