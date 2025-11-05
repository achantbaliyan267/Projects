<?php
// edit_lead.php - Edit a lead by table and id (admin only)
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

$msg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save'])) {
    $name = trim($_POST['name'] ?? '');
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $mobile = trim($_POST['mobile'] ?? '');
    $state = trim($_POST['state'] ?? '');
    $city = trim($_POST['city'] ?? '');
    $occur = intval($_POST['occurrences'] ?? 1);
    $stmt = $conn->prepare("UPDATE $table SET name=?, email=?, mobile=?, state=?, city=?, occurrences=? WHERE id=?");
    $stmt->bind_param('sssssii', $name, $email, $mobile, $state, $city, $occur, $id);
    if ($stmt->execute()) {
        $msg = '<div class="alert alert-success">Lead saved.</div>';
    } else $msg = '<div class="alert alert-danger">Error: '.$conn->error.'</div>';
}

// fetch current
$stmt = $conn->prepare("SELECT * FROM $table WHERE id = ?");
$stmt->bind_param('i', $id);
$stmt->execute();
$res = $stmt->get_result();
$row = $res->fetch_assoc();
if (!$row) die('Lead not found');
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Edit Lead</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-4">
  <a href="dashboard.php" class="btn btn-outline-secondary mb-3">&larr; Back to Dashboard</a>
  <div class="card shadow-sm">
    <div class="card-body">
      <h4>Edit Lead (<?=htmlspecialchars($table)?>)</h4>
      <?= $msg ?>
      <form method="post">
        <div class="mb-2"><input name="name" class="form-control" value="<?=htmlspecialchars($row['name'])?>" required></div>
        <div class="mb-2"><input name="email" class="form-control" value="<?=htmlspecialchars($row['email'])?>" required></div>
        <div class="mb-2"><input name="mobile" class="form-control" value="<?=htmlspecialchars($row['mobile'])?>"></div>
        <div class="row mb-2">
          <div class="col"><input name="state" class="form-control" value="<?=htmlspecialchars($row['state'])?>"></div>
          <div class="col"><input name="city" class="form-control" value="<?=htmlspecialchars($row['city'])?>"></div>
        </div>
        <div class="mb-2"><input name="occurrences" type="number" class="form-control" value="<?=htmlspecialchars($row['occurrences'])?>"></div>
        <div class="d-grid"><button name="save" class="btn btn-primary">Save</button></div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
