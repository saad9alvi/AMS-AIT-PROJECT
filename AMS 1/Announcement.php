<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcement Page</title>
    <link rel="stylesheet" type="text/css" href="Announcement.css">
</head>
<body>
    <div id="announcement">
        <h1>Announcements</h1>
        <div id="announcement-list">
            <?php
            // Load announcements from file
            $filename = 'announcements.txt';
            if (file_exists($filename)) {
                $announcements = file($filename, FILE_IGNORE_NEW_LINES);
                foreach (array_reverse($announcements) as $announcement) {
                    echo '<div class="announcement-item">' . htmlspecialchars($announcement) . '</div><hr>'; 
                }
            } else {
                echo '<p>No announcements yet.</p>';
            }
            ?>
        </div>
    </div>
</body>
</html>
