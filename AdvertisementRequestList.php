<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advertisement Requests</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0; /* Matches light background from previous pages */
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background: #ccc; /* Same header color as previous pages */
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
            margin: 20px auto;
            width: 90%;
            max-width: 1200px;
            background: #fff; /* White background for main content */
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Subtle shadow for elevation */
            border-radius: 5px;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
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
            background-color: #007bff; /* Blue for Details */
        }

        .action-buttons button.send-to-pending {
            background-color: #28a745; /* Green for Send to Pending */
        }

        .action-buttons button.reject {
            background-color: #dc3545; /* Red for Reject */
        }

        .action-buttons button:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div>CONNNECT NATION</div>
        <div>
            <a href="AdminHomepage.php">Home</a>
            <a href="#">Profile</a>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <h2>All Advertisement Requests</h2>
        <table>
            <input type="text" placeholder="Search by Account Name" />
            <thead>
                <tr>
                    <th>Account Name</th>
                    <th>Product Name</th>
                    <th>Time</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>user1@example.com</td>
                    <td>Product A</td>
                    <td>10:30 AM</td>
                    <td>2024-12-29</td>
                    <td class="action-buttons">
                        <button class="details" onclick="viewDetails(this)">Details</button>
                        <button class="send-to-pending" onclick="sendToPending(this)">Send to Pending List</button>
                        <button class="reject" onclick="rejectRequest(this)">Reject</button>
                    </td>
                </tr>
                <tr>
                    <td>user2@example.com</td>
                    <td>Product B</td>
                    <td>02:45 PM</td>
                    <td>2024-12-28</td>
                    <td class="action-buttons">
                        <button class="details" onclick="window.location.href='AdvertisementRequestDetails.php'">Details</button>
                        <button class="send-to-pending" onclick="sendToPending(this)">Send to Pending List</button>
                        <button class="reject" onclick="rejectRequest(this)">Reject</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>

</body>
</html>
