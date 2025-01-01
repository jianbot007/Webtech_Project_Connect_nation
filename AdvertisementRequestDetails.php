<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advertisement Details</title>
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

        header a {
            margin-left: 10px;
            text-decoration: none;
            color: #000;
        }

        main {
            margin: 20px auto;
            width: 90%;
            max-width: 600px;
            background: #fff;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .info {
            margin-bottom: 20px;
        }

        .info p {
            margin: 5px 0;
            font-size: 16px;
            color: #555;
        }

        .info img {
            display: block;
            max-width: 100%;
            height: auto;
            margin: 10px auto;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .action-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .action-buttons button {
            padding: 10px 15px;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 3px;
            font-size: 14px;
        }

        .send-to-pending {
            background-color: #28a745; 
        }

        .reject {
            background-color: #dc3545; 
        }

        .active {
            background-color: #007bff; 
        }

        .back {
            background-color: #6c757d; 
        }

        .action-buttons button:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

    <header>
        <div>CONNECT NATION</div>
        <div>
            <a href="Admin Homepage.html">Home</a>
            <a href="#">Profile</a>
        </div>
    </header>

    
    <main>
        <h2>Advertisement Details</h2>
        <div class="info">
            <p><strong>Account Name:</strong> user1@example.com</p>
            <p><strong>Product Name:</strong> Product A</p>
            <p><strong>Date:</strong> 2024-12-29</p>
            <p><strong>Time:</strong> 10:30 AM</p>
            <p><strong>Payment Method:</strong> Credit Card</p>
            <img src="https://via.placeholder.com/500x300" alt="Advertisement Picture">
        </div>

       
        <div class="action-buttons">
            <button class="send-to-pending" onclick="sendToPending()">Send to Pending List</button>
            <button class="reject" onclick="rejectRequest()">Reject</button>
            <button class="active" onclick="activateAd()">Activate</button>
            <button class="back" onclick="window.location.href='AdvertisementRequestList.html'">Back</button>
        </div>
    </main>

</body>
</html>
