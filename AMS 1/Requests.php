<?php
// Example: fetch last submissions from a database (adjust as needed)
$last_submissions = [
    ['first_name' => 'John', 'last_name' => 'Doe', 'email' => 'john@example.com', 'message' => 'Hello!'],
    // Add more records here
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requests</title>
    <link rel="stylesheet" type="text/css" href="Request.css">
</head>
<body>
    <div id="announcement">
        <h1>Requests</h1>
    </div>
    <div class="contact-form">
        <h2>Last 10 Submitted Contact Forms:</h2>
        <ul>
            <?php foreach ($last_submissions as $submission): ?>
                <li>
                    <strong>Name:</strong> <?= $submission['first_name'] ?> <?= $submission['last_name'] ?><br>
                    <strong>Email:</strong> <?= $submission['email'] ?><br>
                    <strong>Message:</strong> <?= $submission['message'] ?><br>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
