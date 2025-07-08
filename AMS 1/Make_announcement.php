<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Make Announcement</title>
  <link rel="stylesheet" href="Make_announcement.css" />
</head>
<body>
  <div class="container">
    <h1>Make an Announcement</h1>
    <div id="announcementForm">
      <textarea id="announcementText" placeholder="Write your announcement here..."></textarea>
      <button onclick="submitAnnouncement()">Submit Announcement</button>
      <p id="statusMsg"></p>
    </div>
  </div>

  <script src="Make_announcement.js"></script>
</body>
</html>
