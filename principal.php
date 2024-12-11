<?php
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['usuario_id'])) {
    // Si no está logueado, redirigir al login
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJ3QwzJ6f5jL6P4BO1C1t7pah6Wz6gUoVpU5L1hz1+oO4cs4GF5AJeM4kAhm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>Bienvenido, <?php echo htmlspecialchars($_SESSION['nombre']); ?>!</h2>

        <p>Estás logueado en el sistema. ¿Qué deseas hacer?</p>

        <ul>
            <li><a href="reportes.php">Generar Reporte en PDF</a></li>
            <li><a href="logout.php">Cerrar sesión</a></li>
        </ul>
    </div>
    
</body>
</html>
