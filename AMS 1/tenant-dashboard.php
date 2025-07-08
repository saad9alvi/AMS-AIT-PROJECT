<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tenant Dashboard</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp" />
  <link rel="stylesheet" href="tenant.css">
</head>
<body>
  <div class="container">
    <aside>
      <div class="top">
        <div class="logo">
          <h2><span class="danger">Tenant Dashboard</span></h2>
        </div>
        <div class="close" id="close_btn">
          <span class="material-symbols-sharp">close</span>
        </div>
      </div>
      <div class="sidebar">
        <a href="tenant-dashboard.php" class="active">
          <span class="material-symbols-sharp">grid_view</span>
          <h3>Dashboard</h3>
        </a>
        <a href="profile.php">
          <span class="material-symbols-sharp">person</span>
          <h3>My Profile</h3>
        </a>
        <a href="rent_payment.php">
          <span class="material-symbols-sharp">payments</span>
          <h3>Rent Payment</h3>
        </a>
        <a href="Announcement.php">
          <span class="material-symbols-sharp">campaign</span>
          <h3>Announcements</h3>
        </a>
        <a href="maintenance.php">
          <span class="material-symbols-sharp">build</span>
          <h3>Maintenance Requests</h3>
        </a>
        <a href="complaints.php">
          <span class="material-symbols-sharp">feedback</span>
          <h3>Complaints / Feedback</h3>
        </a>
        <a href="index.php">
          <span class="material-symbols-sharp">logout</span>
          <h3>Log Out</h3>
        </a>
      </div>
    </aside>

    <main>
      <h1>Tenant</h1><h2>Dashboard</h2>
      <div class="date">
        <input type="date">
      </div>

      <div class="insights">
        <div class="sales">
          <span class="material-symbols-sharp">trending_up</span>
          <div class="middle">
            <div class="left">
              <h3>Rent Due</h3>
              <h1>35000Rs</h1>
            </div>
            <div class="progress">
              <svg><circle r="30" cy="40" cx="40"></circle></svg>
              <div class="number"><p>55%</p></div>
            </div>
          </div>
          <small>This Month</small>
        </div>
        <div class="expenses">
          <span class="material-symbols-sharp">local_mall</span>
          <div class="middle">
            <div class="left">
              <h3>Total Paid</h3>
              <h1>25000Rs</h1>
            </div>
            <div class="progress">
              <svg><circle r="30" cy="40" cx="40"></circle></svg>
              <div class="number"><p>70%</p></div>
            </div>
          </div>
          <small>This Month</small>
        </div>
        <div class="income">
          <span class="material-symbols-sharp">stacked_line_chart</span>
          <div class="middle">
            <div class="left">
              <h3>Remaining Balance</h3>
              <h1>2000Rs</h1>
            </div>
            <div class="progress">
              <svg><circle r="30" cy="40" cx="40"></circle></svg>
              <div class="number"><p>10%</p></div>
            </div>
          </div>
          <small>This Month</small>
        </div>
      </div>

      <div class="recent_order">
        <h2>Recent Status</h2>
        <table>
          <thead>
            <tr>
              <th>Upcoming Payment Reminder</th>
              <th>Service Requests</th>
              <th>Documents</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>5 July 2025</td>
              <td>Leaking tap - Pending</td>
              <td>Rental Agreement.pdf</td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>

   <div class="right">
      <div class="top">
        <button id="menu_bar">
          <span class="material-symbols-sharp">menu</span>
        </button>
        <div class="theme-toggler">
          <span class="material-symbols-sharp active">light_mode</span>
          <span class="material-symbols-sharp">dark_mode</span>
        </div>
        <div class="profile">
            <div class="info">
                <p><b>Hassan</b></p>
                <p>Tenant</p>
            </div>
            <div class="profile-photo">
               <img src="imgs.jpg" alt="Profile Picture"/>
            </div>
         </div>
      </div>
  </div>

  <script src="tenant.js"></script>
</body>
</html>
