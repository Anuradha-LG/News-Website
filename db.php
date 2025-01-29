<?php
// Database connection settings
$host = 'localhost';        // Your database host (usually localhost)
$dbname = 'newsdata';  // The name of your database
$username = 'root';         // Your database username (default for XAMPP is 'root')
$password = '';             // Your database password (default for XAMPP is an empty string)

try {
    // Create PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Handle connection error
    echo 'Connection failed: ' . $e->getMessage();
}
?>
