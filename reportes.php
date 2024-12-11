<?php
// Inicia la sesión para poder usar variables de sesión, si es necesario más adelante.
session_start();

// Requiere la biblioteca FPDF que se usa para generar el PDF.
require('fpdf/fpdf.php');

// Incluye el archivo de configuración, donde se debe definir la conexión a la base de datos.
require 'config.php';

// Crear una nueva instancia de la clase FPDF para crear un documento PDF.
$pdf = new FPDF();

// Añadir una nueva página al documento PDF.
$pdf->AddPage();

// Configurar la fuente para el título del reporte, tipo 'Arial', negrita ('B') y tamaño 16.
$pdf->SetFont('Arial', 'B', 16);

// Añadir el título del reporte al PDF, centrado ('C') en una celda de 200x10 píxeles.
$pdf->Cell(200, 10, 'Reporte de Usuarios', 0, 1, 'C');
$pdf->Ln(10);  // Agregar espacio debajo del título

// Configurar la fuente para los encabezados de la tabla, tipo 'Arial', negrita ('B') y tamaño 12.
$pdf->SetFont('Arial', 'B', 12);

// Crear las celdas para los encabezados de la tabla. Cada celda representa una columna.
$pdf->Cell(30, 10, 'ID', 1, 0, 'C');  // ID
$pdf->Cell(40, 10, 'Nombre', 1, 0, 'C');  // Nombre
$pdf->Cell(70, 10, 'Correo', 1, 0, 'C');  // Correo electrónico
$pdf->Cell(45, 10, 'Fecha Registro', 1, 1, 'C');  // Fecha de registro

// Cambiar la fuente a 'Arial', normal, tamaño 12 para los datos de los usuarios.
$pdf->SetFont('Arial', '', 12);

// Consulta SQL para obtener todos los usuarios de la base de datos.
$sql = "SELECT * FROM usuarios";
$stmt = $pdo->query($sql); // Ejecuta la consulta SQL usando PDO.
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);  // Obtiene todos los registros como un array asociativo.

// Recorre todos los usuarios obtenidos y agrega una fila en la tabla del PDF para cada usuario.
foreach ($usuarios as $usuario) {
    // Agrega una celda por cada campo de cada usuario (ID, Nombre, Correo, Fecha de registro).
    $pdf->Cell(30, 10, $usuario['id'], 1, 0, 'C');  // Muestra el ID del usuario.
    $pdf->Cell(40, 10, $usuario['nombre'], 1, 0, 'C');  // Muestra el nombre del usuario, alineado a la izquierda.
    $pdf->Cell(70, 10, $usuario['correo'], 1, 0, 'C');  // Muestra el correo electrónico del usuario, alineado a la izquierda.
    $pdf->Cell(45, 10, $usuario['fecha_registro'], 1, 1, 'C');  // Muestra la fecha de registro del usuario.
}

// Agregar una línea de separación al final de la tabla para mejorar la visibilidad.
$pdf->Ln(10);

// Mostrar el archivo PDF generado.
// El parámetro 'D' indica que el archivo será descargado directamente por el usuario.
$pdf->Output('D', 'reporte_usuarios.pdf');
?>
