<?php
$host = "localhost";
$db = "inventario_computo";
$user = "root";
$pass = ""; // Cámbiala por la contraseña real de MySQL
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    http_response_code(500);
    die(json_encode(["error" => "Error de conexión: " . $e->getMessage()]));
}
?>