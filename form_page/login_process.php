<?php
// ---- login_process.php ----
require_once 'config.php'; // Session aur admin credentials ke liye

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Check if entered credentials match the defined admin credentials
    if ($username === ADMIN_USERNAME && $password === ADMIN_PASSWORD) {
        // Login successful
        // Create a session variable to mark the admin as logged in
        $_SESSION['admin_logged_in'] = true;
        
        // Redirect to the dashboard
        header("Location: dashboard.php");
        exit;
    } else {
        // Login failed
        $_SESSION['login_error'] = "Invalid username or password.";
        
        // Redirect back to the login page
        header("Location: login.php");
        exit;
    }
} else {
    // Redirect if accessed directly
    header("Location: login.php");
    exit;
}
?>