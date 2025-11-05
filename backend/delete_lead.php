<?php
// delete_lead.php - Delete a lead (admin only)
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require_once 'db.php';
if (!isset($_SESSION['admin_logged']) || $_SESSION['admin_logged'] !== true) {
    header('Location: index.php'); exit;
}

$table = $_GET['table'] ?? '';
$id = intval($_GET['id'] ?? 0);
$allowed = ['primary_leads','secondary_leads','tertiary_leads'];
if (!in_array($table, $allowed) || $id <= 0) {
    die('Invalid request');
}

$stmt = $conn->prepare("DELETE FROM $table WHERE id = ?");
$stmt->bind_param('i', $id);
$stmt->execute();
header('Location: dashboard.php');
exit;
?>
