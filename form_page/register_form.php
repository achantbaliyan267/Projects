<?php
// ---- register_form.php ----
require_once 'config.php'; // Includes session_start() and $conn
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Account</title>

  <!-- Link your CSS file -->
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
.form-box{
  width: 100%;
max-width: 450px;
padding: 30px;
background: #fff;
overflow: hidden;
border-radius: 10px;
 box-shadow: 0 4px 10px rgb(223, 206, 206);

}
.container{
  margin: 0%;
  display:flex;
  border-radius: 10px;
  box-shadow:0 4px 10px rgb(224, 223, 223);
  backdrop-filter: blur(10px);
  overflow: hidden;
  width: 660px;
}
.image-section {
object-fit: cover;
 color: white;
  padding: 0px;
  width: 50;
  height: 200px;
}

.image-section img {
height: 42ch;
width: 390px;
 
  max-width: 100%; 
  border-radius: 10px;
}

.form-section {
  width: 65%;
  padding: 25px;
}

.form-section h2 { 
  margin-bottom: 20px;
  color: black;
}

.form-section form input {
  width: 100%;
  padding: 10px;
  margin: 10px 0;
  border: 1px solid gray;
  border-radius: 5px;
}

.form-section form label {

  font-size: 14px;
  margin: 10px 0;
  color: gray;
}

.form-section form button {
  width: 100%;
  padding: 12px;
  background-color: rgb(117, 196, 230);
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.form-section form button:hover {
  background-color: blue;
}
.echo{
  color: #fff;
}
  </style>
</head>
<body>
  <div class="container">

    <!-- Left side image -->
    <div class="image-section d-none d-md-block">
      <img src="images/download.png" alt="Science Lab">
    </div>

    <!-- Right side form -->
    <div class="form-section">
      <h2>Create Account</h2>
      
      <!-- Display Messages -->
      <?php
      if (isset($_SESSION['register_success'])) {
          echo "<div class='alert alert-success'>{$_SESSION['register_success']}</div>";
          unset($_SESSION['register_success']);
      }
      if (isset($_SESSION['register_info'])) {
          echo "<div class='alert alert-info'>{$_SESSION['register_info']}</div>";
          unset($_SESSION['register_info']);
      }
      if (isset($_SESSION['register_error'])) {
          echo "<div class='alert alert-danger'>{$_SESSION['register_error']}</div>";
          unset($_SESSION['register_error']);
      }
      ?>

      <!-- Registration form -->
      <form action="register_logic.php" method="POST">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <p>for admin <a href="./login.php" rel="login page">login</a></p>
        <button type="submit" name="register">Register</button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>