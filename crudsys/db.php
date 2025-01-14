<?php
$host = 'localhost'; // Database host
$db = 'shop';        // Database name
$user = 'root';      // Database username
$pass = '';          // Database password (leave empty for XAMPP/WAMP)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
    