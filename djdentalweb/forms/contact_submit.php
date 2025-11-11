<?php
session_start();
require_once 'db.php';

if (isset($_POST['send'])) {
    $name    = trim($_POST['name']);
    $email   = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone   = trim($_POST['phone']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    // Validation
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $_SESSION['register_error'] = 'All fields are required!';
        header("Location: ../contact.php#contact");
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['register_error'] = 'Please enter a valid email address.';
        header("Location: ../contact.php#contact");
        exit;
    }

    // Check duplicate submissions
    $checkStmt = $conn->prepare("SELECT id FROM contact_form WHERE email = ?");
    $checkStmt->bind_param("s", $email);
    $checkStmt->execute();
    $checkResult = $checkStmt->get_result();

    if ($checkResult->num_rows > 0) {
        $_SESSION['register_info'] = 'You have already submitted your message earlier.';
        $checkStmt->close();
        $conn->close();
        header("Location: ../contact.php#contact");
        exit;
    }
    $checkStmt->close();

    // Insert data
    $stmt = $conn->prepare("INSERT INTO contact_form (name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $phone, $subject, $message);

    if ($stmt->execute()) {
        $_SESSION['register_success'] = 'Thank you! Your message has been sent successfully.';
    } else {
        $_SESSION['register_error'] = 'Failed to send your message. Please try again later.';
    }

    $stmt->close();
    $conn->close();

    header("Location: ../contact.php#contact");
    exit;
} else {
    $_SESSION['register_error'] = 'Invalid request method.';
    header("Location: ../contact.php#contact");
    exit;
}
?>
