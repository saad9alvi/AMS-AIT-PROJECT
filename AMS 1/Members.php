<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Members</title>
<link rel="stylesheet" type="text/css" href="Members.css">

</head>
<body>
<div class="container">
    <h1>Members</h1>
    <table id="maintenanceTable">
        <!-- Additional rows will go here -->
        <thead>
            <tr>
                <th>Date</th>
                <th>Member</th>
                <th>Total Amount</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2024-20-05</td>
                <td>Harim</td>
                <td>1200Rs</td>
                <td class="status">Paid</td>
                <td><button onclick="deleteBill(this)">Delete</button></td>
            </tr>
            <tr>
                <td>2024-02-05</td>
                <td>Moiz</td>
                <td>1500Rs</td>
                <td class="status">Unpaid</td>
                <td><button onclick="deleteBill(this)">Delete</button></td>
            </tr>
            <tr>
                <td>2024-04-02</td>
                <td>Areeb</td>
                <td>1200Rs</td>
                <td class="status">Unpaid</td>
                <td><button onclick="deleteBill(this)">Delete</button></td>
            </tr>
            <tr>
                <td>2024-07-12</td>
                <td>Daniyal</td>
                <td>1000Rs</td>
                <td class="status">Paid</td>
                <td><button onclick="deleteBill(this)">Delete</button></td>
            </tr>
            <tr>
                <td>2024-12-02</td>
                <td>Asher</td>
                <td>2000</td>
                <td class="status">Paid</td>
                <td><button onclick="deleteBill(this)">Delete</button></td>
            </tr>
            <tr>
                <td>2024-05-14</td>
                <td>Najaf</td>
                <td>1700Rs</td>
                <td class="status">Unpaid</td>
                <td><button onclick="deleteBill(this)">Delete</button></td>
            </tr>
            <tr>
                <td>2024-04-13</td>
                <td>Ali</td>
                <td>1600Rs</td>
                <td class="status">Paid</td>
                <td><button onclick="deleteBill(this)">Delete</button></td>
            </tr>
        </tbody>
    </table>
</div>
<script src="Members.js"></script>
</body>
</html>