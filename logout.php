<?php
// Inicia la sesión para poder acceder a las variables de sesión existentes.
session_start();

// Elimina todas las variables de sesión.
session_unset(); 

// Destruye la sesión actual y borra todos los datos asociados a la misma.
session_destroy(); 

// Redirige al usuario a la página principal (index.php) después de cerrar la sesión.
header('Location: index.php'); 

// Detiene la ejecución del script para asegurarse de que no se ejecute ningún código adicional.
exit(); 
?>
