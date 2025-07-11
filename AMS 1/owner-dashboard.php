<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Owner</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" type="text/css" href="owner.css"> 
</head>
<body>
   <div class="container">
      <aside>
           
         <div class="top">
           <div class="logo">
             <h2> <span class="danger">Owner Dashboard</span> </h2>
           </div>
           <div class="close" id="close_btn">
            <span class="material-symbols-sharp">
              close
              </span>
           </div>
         </div>
         <!-- end top -->
          <div class="sidebar">

            <a href="owner-dashboard.php" class="active">
              <span class="material-symbols-sharp">grid_view </span>
              <h3>Dashbord</h3>
           </a>
           <a href="Announcement.php">
            <span class="material-symbols-sharp">report_gmailerrorred </span>
            <h3>Announcement</h3>
         </a>
           <a href="Make_announcement.php">
              <span class="material-symbols-sharp">campaign</span>
              <h3>Make_Announcement</h3>
           </a>
           <a href="maintainance_bill.php">
              <span class="material-symbols-sharp">insights </span>
              <h3>Maintainance Bill</h3>
           </a>
           <a href="Requests.php">
              <span class="material-symbols-sharp">receipt_long </span>
              <h3>Requests</h3>
           </a>

           <a href="index.php">
            <span class="material-symbols-sharp">logout</span>
            <h3>Log Out</h3>
           </a>
             


          </div>

      </aside>
      <!-- --------------
        end asid
      -------------------- -->

      <!-- --------------
        start main part
      --------------- -->

      <main>
           <h1>Owner</h1>
           <h2>Dashboard</h2>
           

           <div class="date">
             <input type="date" >
           </div>

        <div class="insights">

           <!-- start seling -->
            <div class="sales">
               <span class="material-symbols-sharp">trending_up</span>
               <div class="middle">

                 <div class="left">
                   <h3>Owner's Balance</h3>
                   <h1>50000Rs</h1>
                 </div>
                  <div class="progress">
                      <svg>
                         <circle  r="30" cy="40" cx="40"></circle>
                      </svg>
                      <div class="number"><p>55%</p></div>
                  </div>

               </div>
               <small>This Month</small>
            </div>
           <!-- end seling -->
              <!-- start expenses -->
              <div class="expenses">
                <span class="material-symbols-sharp">local_mall</span>
                <div class="middle">
 
                  <div class="left">
                    <h3>Total Property Expenses</h3>
                    <h1>110000Rs</h1>
                  </div>
                   <div class="progress">
                       <svg>
                          <circle  r="30" cy="40" cx="40"></circle>
                       </svg>
                       <div class="number"><p>70%</p></div>
                   </div>
 
                </div>
                <small>This Month</small>
             </div>
            <!-- end seling -->
               <!-- start seling -->
               <div class="income">
                <span class="material-symbols-sharp">stacked_line_chart</span>
                <div class="middle">
 
                  <div class="left">
                    <h3>Projected Expenses</h3>
                    <h1>150000Rs</h1>
                  </div>
                   <div class="progress">
                       <svg>
                          <circle  r="30" cy="40" cx="40"></circle>
                       </svg>
                       <div class="number"><p>40%</p></div>
                   </div>
 
                </div>
                <small>This Month</small>
             </div>
            <!-- end seling -->

        </div>
       <!-- end insights -->
      <div class="recent_order">
         <h2>Recent Status</h2>
         <table> 
             <thead>
              <tr>
                <th>Property Name</th>
                <th>Property Location</th>
                <th>Payment</th>
                <th>Payment Status</th>
                <th>Last Payment Date</th>
              </tr>
             </thead>
              <tbody>
                 <tr>
                   <td>Johar Block-15</td>
                   <td>A-310</td>
                   <td>4500</td>
                   <td class="warning">Paid</td>
                   <td class="primary">1-2-2024</td>
                 </tr>
                 <tr>
                  <td>Gulshan Block-16</td>
                  <td>B-214</td>
                  <td>7800</td>
                  <td class="warning">Paid</td>
                  <td class="primary">3-2-2024</td>
                </tr>
                <tr>
                  <td>Johar Block-14</td>
                  <td>C-809</td>
                  <td>50000</td>
                  <td class="warning">Pending</td>
                  <td class="primary">---</td>
                </tr>
                <tr>
                  <td>Continental</td>
                  <td>Shop-14</td>
                  <td>15000</td>
                  <td class="warning">Paid</td>
                  <td class="primary">5-2-2024</td>
                </tr>
              </tbody>
         </table>
         
      </div>

      </main>
      <!------------------
         end main
        ------------------->

      <!----------------
        start right main 
      ---------------------->
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
           <p><b>Areeb</b></p>
           <p>Owner</p>
           <small class="text-muted"></small>
       </div>
       <div class="profile-photo">
         <img src="imgs.jpg" alt=""/>
       </div>
    </div>
</div>

<script src="owner.js"></script>
   <!-- ... (previous HTML code) ... -->

</body>
</html>