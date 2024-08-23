<?php
// Configuración de la conexión a MySQL
$host = "127.0.0.1"; // Pon aquí el nombre o IP de tu servidor MySQL
$port = "3306"; // Especifica el puerto 3307
$user = "root"; // Usuario de la base de datos MySQL
$password = ""; // Contraseña de MySQL (en XAMPP suele ser vacío por defecto)
$database = "prueba"; // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($host, $user, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Conexión exitosa a la base de datos MySQL";
}
?>
