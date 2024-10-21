<?php
$host = 'localhost'; // Cambiar según tu configuración
$db = 'supermarket_db';
$user = 'root'; // Cambiar según tu configuración
$pass = ''; // Cambiar según tu configuración

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
