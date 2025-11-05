<?php

require_once 'config.php';

// If admin is already logged in, redirect to the dashboard.
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
       
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

body {
  background-image: url("https://t3.ftcdn.net/jpg/08/30/77/52/240_F_830775212_PQAapkj2QohsTlIUdOnyj0rYIvgHMNsH.jpg") ;
  background-position: center;
  background-size: cover;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}

.container {
 margin: 0 15px;
}

        .login-card {
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="card login-card">
        <div class="card-body">
            <h2 class="card-title text-center mb-4 fw-bold">Admin Login</h2>

            <!-- Display error message if login fails -->
            <?php if (isset($_SESSION['login_error'])): ?>
                <div class="alert alert-danger">
                    <?php 
                        echo $_SESSION['login_error']; 
                        unset($_SESSION['login_error']);
                    ?>
                </div>
            <?php endif; ?>

            <form action="login_process.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-3">Login</button>
                <p>For register <a href="./register_form.php" rel="register">Click Here</a></p>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>