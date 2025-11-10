<?php
// register.php - Student registration (for students to submit leads)
// This file inserts into primary_leads by default and moves records on repeats.
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'db.php';

$msg = '';
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader (created by composer, not included with PHPMailer)
require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $name = trim($_POST['name'] ?? '');
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $mobile = trim($_POST['mobile'] ?? '');
    $state = trim($_POST['state'] ?? '');
    $city = trim($_POST['city'] ?? '');
    //Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'user@example.com';                     //SMTP username
    $mail->Password   = 'secret';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
    $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

    if (!$name || !$email || !$mobile) {
        $msg = '<div class="alert alert-danger">Name, valid Email and Mobile are required.</div>';
    } else {
        // Check existing in tertiary -> if present, increase occurrences (optional)
        $found = false;

        // Helper to move: move from $from_table to $to_table and set occurrences appropriately
        function moveLead($conn, $email, $from_table, $to_table, $occVal) {
            // fetch
            $s = $conn->prepare("SELECT * FROM $from_table WHERE email = ?");
            $s->bind_param('s', $email);
            $s->execute();
            $res = $s->get_result();
            if ($row = $res->fetch_assoc()) {
                // insert into to_table (if not exists)
                $ins = $conn->prepare("INSERT IGNORE INTO $to_table (name,email,mobile,state,city,occurrences,created_at) VALUES (?,?,?,?,?,? , ?)");
                $now = $row['created_at'];
                $ins->bind_param('sssssis', $row['name'], $row['email'], $row['mobile'], $row['state'], $row['city'], $occVal, $now);
                $ins->execute();
                // delete from from_table
                $del = $conn->prepare("DELETE FROM $from_table WHERE email = ?");
                $del->bind_param('s', $email);
                $del->execute();
                return true;
            }
            return false;
        }

        // If exists in tertiary -> just update occurrences and timestamp
        $stmt = $conn->prepare("SELECT id,occurrences FROM tertiary_leads WHERE email = ?");
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $r = $stmt->get_result();
        if ($row = $r->fetch_assoc()) {
            $found = true;
            $newocc = max(3, $row['occurrences'] + 1);
            $up = $conn->prepare("UPDATE tertiary_leads SET occurrences = ?, name = ?, mobile = ?, state = ?, city = ?, created_at = NOW() WHERE id = ?");
            $up->bind_param('issssi', $newocc, $name, $mobile, $state, $city, $row['id']);
            $up->execute();
            $msg = '<div class="alert alert-success">Lead updated in Tertiary leads (repeat).</div>';
        }

        // If not in tertiary, check secondary
        if (!$found) {
            $stmt = $conn->prepare("SELECT id,occurrences FROM secondary_leads WHERE email = ?");
            $stmt->bind_param('s', $email);
            $stmt->execute();
            $r = $stmt->get_result();
            if ($row = $r->fetch_assoc()) {
                $found = true;
                // Move to tertiary (occurrences -> increment)
                $moved = moveLead($conn, $email, 'secondary_leads', 'tertiary_leads', $row['occurrences'] + 1);
                if ($moved) {
                    $msg = '<div class="alert alert-warning">Lead moved from Secondary → Tertiary (2nd repeat).</div>';
                } else {
                    $msg = '<div class="alert alert-danger">Could not move to tertiary.</div>';
                }
            }
        }

        // If not in secondary/tertiary, check primary
        if (!$found) {
            $stmt = $conn->prepare("SELECT id,occurrences FROM primary_leads WHERE email = ?");
            $stmt->bind_param('s', $email);
            $stmt->execute();
            $r = $stmt->get_result();
            if ($row = $r->fetch_assoc()) {
                $found = true;
                // Move to secondary (occurrences -> increment)
                $moved = moveLead($conn, $email, 'primary_leads', 'secondary_leads', $row['occurrences'] + 1);
                if ($moved) {
                    $msg = '<div class="alert alert-warning">Lead moved from Primary → Secondary (repeat).</div>';
                } else {
                    $msg = '<div class="alert alert-danger">Could not move to secondary.</div>';
                }
            }
        }

        // If not found in any table => insert into primary_leads
        if (!$found) {
            $ins = $conn->prepare("INSERT INTO primary_leads (name,email,mobile,state,city,occurrences) VALUES (?,?,?,?,?,1)");
            $ins->bind_param('sssss', $name, $email, $mobile, $state, $city);
            if ($ins->execute()) {
                $msg = '<div class="alert alert-success">Thank you — you are registered.</div>';
            } else {
                // if email duplicate (rare) show error
                $msg = '<div class="alert alert-danger">Error: '.$conn->error.'</div>';
            }
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Student Registration - Lead CRM</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background: #f5f7f9; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
    .card { 
      border-radius: 12px; 
      background: linear-gradient(135deg, #f0f8ff 0%, #ffffff 100%); 
      border: 1px solid #dee2e6; 
      box-shadow: 0 4px 12px rgba(0,0,0,0.1); 
      animation: fadeIn 0.8s ease-out forwards; 
    }
    .card-body { padding: 2rem; }
    h4 { font-weight: bold; color: #343a40; }
    .text-muted { font-size: 0.95rem; }
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
    .btn-success { 
      border-radius: 8px; 
      font-weight: bold; 
      transition: all 0.3s; 
    }
    .btn-success:hover { 
      transform: scale(1.05); 
      box-shadow: 0 4px 8px rgba(0, 128, 0, 0.2); 
    }
    .admin-link { 
      display: inline-block; 
      margin-top: 1rem; 
      color: #0d6efd; 
      text-decoration: none; 
      transition: color 0.3s; 
    }
    .admin-link:hover { color: #0a58ca; text-decoration: underline; }
    
    /* Fade-In Animation */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    /* Media Queries for Responsiveness */
    @media (max-width: 576px) {
      .card-body { padding: 1.5rem; }
      h4 { font-size: 1.5rem; }
      .form-control { font-size: 0.9rem; padding: 0.6rem; }
      .btn-success { font-size: 1rem; }
      .container { padding: 1rem; }
    }
  </style>
</head>
<body>
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-7">
        <div class="card shadow-sm">
          <div class="card-body">
            <h4 class="mb-3">Student Registration</h4>
            <p class="text-muted">Fill details to register.</p>
            <?= $msg ?>
            <form method="post">
              <div class="mb-3"><input name="name" class="form-control" placeholder="Full name" required></div>
              <div class="mb-3"><input name="email" type="email" class="form-control" placeholder="Email" required></div>
              <div class="mb-3"><input name="mobile" class="form-control" placeholder="Mobile number" required></div>
              <div class="row">
                <div class="col-md-6 mb-3"><input name="state" class="form-control" placeholder="State" required></div>
                <div class="col-md-6 mb-3"><input name="city" class="form-control" placeholder="City" required></div>
              </div>
              <div class="d-grid"><button name="register" class="btn btn-success">Register</button></div>
            </form>
            <hr>
            <p class="mb-0"><a href="index.php" class="admin-link">Admin Login</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>