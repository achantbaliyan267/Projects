<?php
// ==== DATABASE CONNECTION FILE ====

// Database credentials
$host = "localhost";
$user = "root";      // default XAMPP username
$password = "";      // default XAMPP password (empty)
$database = "dj_college";  // <-- change this to your actual database name

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die(json_encode([
        "status" => "error",
        "message" => "Database connection failed: " . $conn->connect_error
    ]));
}
?>
