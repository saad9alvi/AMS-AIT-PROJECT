<?php
// Step 1: users.php — Store predefined users

// This is a simple associative array to simulate a user database.
// You can expand this later to a real database.
$users = [
  [
    'email' => 'owner@ams.com',
    'password' => 'owner123',
    'role' => 'owner'
  ],
  [
    'email' => 'admin@ams.com',
    'password' => 'admin123',
    'role' => 'admin'
  ],
  //['email' => 'tenant@ams.com','password' => 'tenant123','role' => 'tenant']
];

// Load tenant accounts from file
if (file_exists("tenants.txt")) {
  $lines = file("tenants.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
  foreach ($lines as $line) {
    list($email, $password, $role) = explode("|", $line);
    $users[] = [
      'email' => trim($email),
      'password' => trim($password),
      'role' => trim($role)
    ];
  }
}
?>


