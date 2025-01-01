<html>

<head>
    <title>User Details</title>
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

        .details {
            margin-bottom: 20px;
        }

        .details div {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .details div span {
            font-weight: bold;
        }

        .action-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .action-buttons button {
            padding: 10px 20px;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }

        .action-buttons button.accept {
            background-color: #28a745; 
        }

        .action-buttons button.userDetail {
            background-color: #5b5b5b; 
        }

        .action-buttons button.userProfile {
            background-color: #5b5b5b; 
        }

        .action-buttons button.reject {
            background-color: #dc3545; 
        }

        .action-buttons button.backtoPremium {
            background-color: #4323fc; 
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
            <a href="AdminHomepage.php">Home</a>s
            <a href="#">Profile</a>
        </div>
    </header>

  
    <main>
        <h2>User Details</h2>
        <div class="details">
            <div>
                <span>User Name:</span>
                <span>John Doe</span>
            </div>
            <div>
                <span>Premium Account Name:</span>
                <span>somoyTV</span>
            </div>
            <div>
                <span>Website URL:</span>
                <span><a href="https://example.com" target="_blank">https://example.com</a></span>
            </div>
            <div>
                <span>Website Name:</span>
                <span>SomoyTV</span>
            </div>
            <div>
                <span>Type:</span>
                <span>Media Channel</span>
            </div>
            <div>
                <span>Date:</span>
                <span>30.12.2024</span>
            </div>
            <div>
                <span>Time:</span>
                <span>12:30 AM</span>
            </div>
            <div>
                <span>Subscription(days):</span>
                <span>15</span>
            </div>
            <div>
                <span>Payment type:</span>
                <span>Bkash</span>
            </div>
        </div>
        <div class="action-buttons">
            <button class="accept" onclick="acceptUser()">Accept</button>
            <button class="reject" onclick="rejectUser()">Reject</button>
            <button class="backtoPremium" onclick="window.location.href='PremiumAccount.php'">Back</button>
            <button class="userDetail">User Details</button>
            <button class="userProfile">User Profile</button>
        </div>
    </main>

  
</body>
</html>
