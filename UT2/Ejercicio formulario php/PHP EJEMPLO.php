<?php
// Datos de conexión
$servidor = "localhost";
$usuario = "root"; // Ajusta el usuario
$contrasena = ""; // Ajusta la contraseña si es necesario
$base_datos = "coches"; // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servidor, $usuario, $contrasena, $base_datos);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>