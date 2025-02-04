<?php
// Database connection settings
$host = 'sql303.infinityfree.com';        // Your database host (usually localhost)
$dbname = 'f0_38242304_NewsPortal';  // The name of your database
$username = 'if0_38242304';         // Your database username (default for XAMPP is 'root')
$password = 'ht7kZZMktl';             // Your database password (default for XAMPP is an empty string)

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
