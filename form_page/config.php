<?php
// ---- File: config.php ----

// Start the session if it hasn't been started already.
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// === ADMIN CREDENTIALS ===
define('ADMIN_USERNAME', 'admin');
define('ADMIN_PASSWORD', 'ayush267@#');

// === DATABASE CREDENTIALS ===
$host     = "localhost";
$user     = "root";
$password = "";
$database = "user_db"; // Make sure this database exists.

// Create and check the database connection.
$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    // For security, don't show detailed error to the user.
    // You can log the error instead: error_log("Connection failed: " . $conn->connect_error);
    die("Database connection failed. Please try again later.");
}
?>