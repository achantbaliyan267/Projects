<?php
header("Content-Type: application/json");

// Include database connection
include "db.php";

// Get and sanitize POST data
$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

// Validate form fields
if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    echo json_encode(["status" => "error", "message" => "All fields are required."]);
    exit;
}

// Prepare and execute insert query
$stmt = $conn->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $subject, $message);

if ($stmt->execute()) {
    echo json_encode(["status" => "success", "message" => "Thank you for contacting us! We'll get back to you soon."]);
} else {
    echo json_encode(["status" => "error", "message" => "Something went wrong. Please try again."]);
}

// Close connections
$stmt->close();
$conn->close();
?>
