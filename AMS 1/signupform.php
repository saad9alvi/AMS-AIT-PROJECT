<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="sign-up-form">
        <h1>Sign Up</h1>
        <form method="POST" action="signupform.php"> <!-- Specify method and action -->
            <input type="text" class="input-box" placeholder="First Name" name="first_name" required>
            <input type="text" class="input-box" placeholder="Last Name" name="last_name" required>
            <input type="email" class="input-box" placeholder="Email" name="email" required>
            <input type="text" class="input-contact" placeholder="Contact" name="contact" required>
            <input type="password" class="input-pass" placeholder="Password" name="password" required>
            <input type="password" class="input-cpass" placeholder="Confirm Password" name="confirm_password" required>
            <p><input type="checkbox" name="terms_conditions" required> I agree to the terms and conditions</p>
            <input type="hidden" name="first_name" value="{{ first_name }}">
            <input type="hidden" name="last_name" value="{{ last_name }}">
            <button type="submit" class="Signupbutton">Sign Up</button> <!-- Change type to submit -->
            <hr>
            <p>Already have an account? <a href="login.php">Login</a></p>
        </form>
        <form action="owner.html" method="GET">
            <!-- Include other form fields if needed -->
            <input type="hidden" name="first_name" value="{{ first_name }}">
            <input type="hidden" name="last_name" value="{{ last_name }}">
        </form>    
    </div>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $first = $_POST['first_name'];
  $last = $_POST['last_name'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $password = $_POST['password'];
  $confirm = $_POST['confirm_password'];

  if ($password !== $confirm) {
    echo "<script>alert('Passwords do not match!');</script>";
    return;
  }

  // Format: email|password|tenant
  $newTenant = "$email|$password|tenant\n";

  // Save to tenants.txt
  file_put_contents("tenants.txt", $newTenant, FILE_APPEND);

  // Redirect to login page
  echo "<script>alert('Account created! Please log in.'); window.location.href='login.php';</script>";
}
?>

