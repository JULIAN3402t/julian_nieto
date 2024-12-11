<?php
$host = "localhost";
$usuario = "root"; // Usuario predeterminado en XAMPP
$clave = "";       // Contraseña vacía en XAMPP
$baseDeDatos = "as_constructores";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$baseDeDatos", $usuario, $clave);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
