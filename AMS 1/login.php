<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="loginstyle.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="loginstyle.css">
  <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
  <div class="wrapper">
  <form action="login.php" method="POST">
    <h1>Login</h1>

    <div class="input-box">
      <input type="email" name="email" placeholder="Email" required>
      <i class="fas fa-envelope"></i>
    </div>

    <div class="input-box">
      <input type="password" id="password" name="password" placeholder="Password" required>
      <i class="fas fa-eye-slash" id="togglePassword"></i>
    </div>
    
    <div class="remember-forgot">
      <label><input type="checkbox" name="remember"> Remember me</label>
      <a href="#">Forgot Password?</a>
    </div>

    <button type="submit" class="btn">Login</button>

    <div class="register-link">
      <p>Don't have an account? <a href="signupform.php">Register</a></p>
    </div>
  </form>
</div>

<script>
  const password = document.getElementById('password');
  const toggle = document.getElementById('togglePassword');

  toggle.addEventListener('click', () => {
    const isPassword = password.type === 'password';
    password.type = isPassword ? 'text' : 'password';
    toggle.classList.toggle('fa-eye');
    toggle.classList.toggle('fa-eye-slash');
  });
</script>

</body>
</html>

<?php
include 'users.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  foreach ($users as $user) {
    if ($user['email'] === $email && $user['password'] === $password) {
      if ($user['role'] === 'owner') {
        header('Location: owner-dashboard.php');
        exit();
      } elseif ($user['role'] === 'admin') {
        header('Location: admin-dashboard.php');
        exit();
      } elseif ($user['role'] === 'tenant') {
        header('Location: tenant-dashboard.php');
        exit();
      }
    }
  }

  echo "<script>alert('Invalid email or password');</script>";
}
?>
