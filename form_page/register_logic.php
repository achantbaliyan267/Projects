<?php
require_once 'config.php';
if (isset($_POST['register'])) {
    $name = trim($_POST['name'] ?? '');
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $username = trim($_POST['username'] ?? '');
    $pass_raw = $_POST['password'] ?? '';


    if (empty($name) || empty($email) || empty($username) || empty($pass_raw)) 
        {
            $_SESSION['register_error'] = "All fields are required.";
            
            header("Location: register_form.php");
            exit;}
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['register_error'] = "Invalid email format.";

        header("Location: register_form.php");
        exit;}
    $password = password_hash($pass_raw, PASSWORD_DEFAULT);
    $checkStmt = $conn->prepare("SELECT id FROM users WHERE email = ? OR username = ?");
    $checkStmt->bind_param("ss", $email, $username);$checkStmt->execute();
    $result = $checkStmt->get_result();
    if ($result->num_rows > 0) {
        $insertStmt = $conn->prepare("INSERT INTO users_2 (name, email, username, password) VALUES (?, ?, ?, ?)");
        $insertStmt->bind_param("ssss", $name, $email, $username, $password);
        if ($insertStmt->execute()) {
            
            $_SESSION['register_info'] = "This lead is already a primary lead. Saved as a secondary lead.";
        } else {
            $_SESSION['register_error'] = "Error saving duplicate lead.";
        }
        $insertStmt->close();
    } else {
        $insertStmt = $conn->prepare("INSERT INTO users (name, email, username, password) VALUES (?, ?, ?, ?)");
        $insertStmt->bind_param("ssss", $name, $email, $username, $password);
        if ($insertStmt->execute()) {
            $_SESSION['register_success'] = "Primary lead registered successfully!";} 
            else {
                $_SESSION['register_error'] = "Failed to register primary lead.";
            }
            $insertStmt->close();
        }
    $checkStmt->close();
    $conn->close();
    header("Location: register_form.php");
    exit;
} else {header("Location: register_form.php");
    exit;}
?>