<?php


// Activa la visualización de errores
error_reporting(E_ALL);
ini_set('display_errors', 1);


$host = 'localhost:3307'; // IP del contenedor MySQL
$db = 'BaseDatosTutorias'; // Nombre de tu base de datos
$user = 'root'; // Usuario
$pass = '271198'; // Contraseña

// Crear conexión


$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>