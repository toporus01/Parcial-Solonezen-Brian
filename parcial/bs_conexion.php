<?php
$host = 'localhost'; // Cambia esto si tu base de datos está en otro servidor
$usuario = 'root'; // Reemplaza con tu usuario de MySQL
$contraseña = ''; // Reemplaza con tu contraseña de MySQL
$base_de_datos = 'bs_parcial_blog';

// Crear conexión
$conn = new mysqli($host, $usuario, $contraseña, $base_de_datos);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
// echo "Conectado exitosamente"; // Puedes descomentar esta línea para verificar la conexión
?>
