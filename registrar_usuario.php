<?php
// Incluye el archivo de configuración, que normalmente contiene los detalles de conexión a la base de datos y otras configuraciones.
require 'config.php'; 

// Verifica si el formulario se ha enviado mediante el método POST.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtiene los datos enviados desde el formulario de registro.
    $nombre = $_POST['nombre']; // Asigna el valor del campo 'nombre' a la variable $nombre.
    $correo = $_POST['correo']; // Asigna el valor del campo 'correo' a la variable $correo.
    
    // Cifra la contraseña utilizando el algoritmo BCRYPT, de esta forma la contraseña se guarda de manera segura en la base de datos.
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);

    // Prepara la sentencia SQL para insertar el nuevo usuario en la base de datos.
    // La consulta SQL utiliza marcadores de posición (?) para prevenir inyecciones SQL.
    $sql = "INSERT INTO usuarios (nombre, correo, contrasena) VALUES (?, ?, ?)";

    // Prepara la consulta para ser ejecutada, usando el objeto PDO ($pdo) que debería haberse definido en 'config.php'.
    $stmt = $pdo->prepare($sql);

    // Ejecuta la consulta preparada, pasando los valores para los marcadores de posición (nombre, correo, contrasena).
    $stmt->execute([$nombre, $correo, $contrasena]);

    // Muestra un mensaje que indica que el usuario fue registrado con éxito y ofrece un enlace para iniciar sesión.
    echo "Usuario registrado con éxito. <a href='login.php'>Iniciar sesión</a>";
}
?>
