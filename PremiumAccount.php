<html>
<head>
    <title>Premium Accounts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0; 
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background: #ccc; 
        }

        header input[type="text"] {
            width: 200px;
            padding: 5px;
        }

        header a {
            margin-left: 10px;
            text-decoration: none;
            color: #000;
        }

        main {
            display: flex;
            flex-direction: column;
            margin: 20px auto;
            width: 90%;
            max-width: 1200px;
            background: #fff; 
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        .action-buttons button {
            padding: 5px 10px;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 3px;
            margin-right: 5px;
        }

        .action-buttons button.details {
            background-color: #007bff; 
        }

        .action-buttons button.reminder {
            background-color: #ffa500; 
        }

        .action-buttons button.accept {
            background-color: #28a745; 
        }

        .action-buttons button.reject {
            background-color: #dc3545; 
        }

        .action-buttons button:hover {
            opacity: 0.9;
        }

        .section {
            margin-bottom: 40px;
        }
    </style>
</head>
<body>
 
    <header>
        <div>CONNECT NATION</div>
      
        <div>
            <a href="AdminHomepage.php">Home</a>
            <a href="#">Profile</a>
        </div>
    </header>

   
    <main>
        <div class="section">
            <h2>Premium Accounts List</h2>
            <table>
                <input type="text" placeholder="Search..." />
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Premium Start Date</th>
                        <th>Days Left for Next Payment</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="premiumList">
                    <tr>
                        <td>user1@example.com</td>
                        <td>2024-12-01</td>
                        <td>10</td>
                        <td class="action-buttons">
                            <button class="reminder" onclick="sendReminder(this)">Send Reminder</button>
                            <button class="details" onclick="viewUserDetails(this)">User Details</button>
                        </td>
                    </tr>
                    <tr>
                        <td>user2@example.com</td>
                        <td>2024-12-15</td>
                        <td>20</td>
                        <td class="action-buttons">
                            <button class="reminder" onclick="sendReminder(this)">Send Reminder</button>
                            <button class="details" onclick="viewUserDetails(this)">User Details</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        
        </div>
        <button class="FullListUser" onclick="viewUserDetails(this)">Full List</button>
      
        <div class="section">
            <h2>Premium Account Requests</h2>
            <table>
                <input type="text" placeholder="Search..." />
                <thead>
                    <tr>
                        <th>Account Name</th>
                        <th>Date of Request Submission</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="premiumRequests">
                    <tr>
                        <td>user3@example.com</td>
                        <td>2024-12-20</td>
                        <td class="action-buttons">
                            <button class="details" onclick="viewRequestDetails(this)">Details</button>
                            <button class="accept" onclick="acceptRequest(this)">Accept</button>
                            <button class="reject" onclick="rejectRequest(this)">Reject</button>
                        </td>
                    </tr>
                    <tr>
                        <td>user4@example.com</td>
                        <td>2024-12-22</td>
                        <td class="action-buttons">
                            <button class="details" onclick="viewRequestDetails(this)">Details</button>
                            <button class="accept" onclick="acceptRequest(this)">Accept</button>
                            <button class="reject" onclick="rejectRequest(this)">Reject</button>
                        </td>
                    </tr>
                </tbody>
            </table>
          
        </div>
        <button class="FullListRequest" onclick="viewUserDetails(this)">Full List</button>
    </main>
</body>
</html>
