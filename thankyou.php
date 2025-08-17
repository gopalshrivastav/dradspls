<?php
session_start();
if (!isset($_SESSION['form_submitted'])) {
    header("Location: index.html"); 
    exit;
}

unset($_SESSION['form_submitted']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Thank You - DRA</title>
  <style>
    body { background:#f5f5f5; font-family:Arial; text-align:center; }
    .thank-box {
      max-width: 500px; margin:100px auto; background:#ffffff;
      padding:30px; border-radius:12px; box-shadow:0 4px 15px rgba(0,0,0,0.1);
    }
    h1 { color:#0a4c85; }
    p { color:#333; }
  </style>
</head>
<body>
  <div class="thank-box">
    <h1>✅ Thank You!</h1>
    <p>Your message has been received. We’ll get back to you soon.</p>
    <a href="index.html">← Back to Home</a>
  </div>
</body>
</html>
