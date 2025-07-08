<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['text'])) {
    $announcement = trim($_POST['text']);

    if (!empty($announcement)) {
        $file = 'announcements.txt';
        $timestamp = date("Y-m-d H:i");
        $entry = "[$timestamp] $announcement" . PHP_EOL;

        // Save the announcement at the bottom of the file
        file_put_contents($file, $entry, FILE_APPEND);
        echo "Announcement saved successfully.";
    } else {
        echo "Announcement text is empty.";
    }
} else {
    echo "Invalid request.";
}
?>
