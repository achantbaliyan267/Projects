<?php
// index.php - Admin login
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require_once 'db.php';

// Admin credentials (change if you want)
define('ADMIN_USER', 'Ayushbaliyan267');
define('ADMIN_PASS', 'ayush@123');

if (isset($_SESSION['admin_logged']) && $_SESSION['admin_logged'] === true) {
    header('Location: dashboard.php');
    exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $u = trim($_POST['username'] ?? '');
    $p = trim($_POST['password'] ?? '');
    if ($u === ADMIN_USER && $p === ADMIN_PASS) {
        $_SESSION['admin_logged'] = true;
        $_SESSION['admin_user'] = ADMIN_USER;
        header('Location: dashboard.php');
        exit;
    } else {
        $error = 'Invalid admin credentials';
    }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin Login - Lead CRM</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { 
      background: #f5f7f9; 
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
      display: flex; 
      align-items: center; 
      justify-content: center; 
      min-height: 100vh; 
    }
    .card { 
      border-radius: 12px; 
      background: linear-gradient(135deg, #f0f8ff 0%, #ffffff 100%); 
      border: 1px solid #dee2e6; 
      box-shadow: 0 4px 12px rgba(0,0,0,0.1); 
      animation: fadeIn 0.8s ease-out forwards; 
      max-width: 380px; 
      width: 100%; 
    }
    .card-body { padding: 2rem; }
    .card-title { font-weight: bold; color: #343a40; margin-bottom: 1.5rem; }
    .form-control { 
      border-radius: 8px; 
      padding: 0.75rem; 
      transition: all 0.3s; 
    }
    .form-control:focus { 
      border-color: #0d6efd; 
      box-shadow: 0 0 8px rgba(13, 110, 253, 0.25); 
    }
    .form-control::placeholder { font-style: italic; color: #adb5bd; }
    .btn-primary { 
      border-radius: 8px; 
      font-weight: bold; 
      transition: all 0.3s; 
    }
    .btn-primary:hover { 
      transform: scale(1.05); 
      box-shadow: 0 4px 8px rgba(13, 110, 253, 0.2); 
    }
    .alert-danger { border-radius: 8px; font-size: 0.95rem; }
    
    /* Fade-In Animation */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    /* Media Queries for Responsiveness */
    @media (max-width: 576px) {
      .card { max-width: 90%; }
      .card-body { padding: 1.5rem; }
      .card-title { font-size: 1.5rem; }
      .form-control { font-size: 0.9rem; padding: 0.6rem; }
      .btn-primary { font-size: 1rem; }
    }
  </style>
</head>
<body>
  <div class="card shadow-sm">
    <div class="card-body">
      <h4 class="card-title">Admin Login</h4>
      <?php if($error): ?><div class="alert alert-danger"><?=htmlspecialchars($error)?></div><?php endif; ?>
      <form method="post">
        <input name="username" class="form-control mb-3" placeholder="Username" required>
        <input name="password" type="password" class="form-control mb-3" placeholder="Password" required>
        <div class="d-grid">
          <button name="login" class="btn btn-primary">Login</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>