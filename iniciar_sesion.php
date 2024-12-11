<?php
// Inicia la sesión o recupera una sesión existente
session_start();

// Incluye el archivo de configuración que contiene la conexión a la base de datos y otras configuraciones importantes
require 'config.php';

// Verifica si la solicitud es de tipo POST, es decir, si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Obtiene los datos enviados desde el formulario
    $correo = $_POST['correo'];   // Almacena el correo electrónico proporcionado por el usuario
    $contrasena = $_POST['contrasena'];  // Almacena la contraseña proporcionada por el usuario

    // Consulta SQL para buscar al usuario en la base de datos mediante su correo electrónico
    $sql = "SELECT * FROM usuarios WHERE correo = ?";
    // Prepara la consulta SQL para prevenir inyecciones SQL
    $stmt = $pdo->prepare($sql);
    // Ejecuta la consulta pasando el correo del usuario como parámetro
    $stmt->execute([$correo]);
    // Obtiene los resultados de la consulta en forma de array asociativo
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verifica si se encontró un usuario con el correo proporcionado y si la contraseña es válida
    if ($usuario && password_verify($contrasena, $usuario['contrasena'])) {
        // Si el usuario existe y la contraseña es correcta:
        
        // Guarda los datos del usuario en la sesión para que esté autenticado en futuras solicitudes
        $_SESSION['usuario_id'] = $usuario['id'];  // Almacena el ID del usuario en la sesión
        $_SESSION['nombre'] = $usuario['nombre'];  // Almacena el nombre del usuario en la sesión
        
        // Redirige al usuario a la página principal (index.php) después de un inicio de sesión exitoso
        header('Location: principal.php');
        // Termina el script para que no se siga ejecutando después de la redirección
        exit();
    } else {
        // Si el correo o la contraseña son incorrectos, muestra un mensaje de error
        echo "Correo o contraseña incorrectos.";
    }
}
?>
