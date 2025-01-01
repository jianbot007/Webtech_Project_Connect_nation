<html>
<head>
   
    <title>Complaint Box</title>
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

        .action-buttons button.warning{
            background-color: #3c657d; 
        }

        .action-buttons button.ignore {
            background-color: #6c757d; 
        }

        .action-buttons button.delete {
            background-color: #dc3545;
        }

        .action-buttons button.ban {
            background-color: #007bff;
        }

        .action-buttons button:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    
    <header>
        <div>CONNECT NATION</div>
        <input type="text" placeholder="Search..." />
        <div>
            <a href="AdminHomepage.php">Home</a>
            <a href="#">Profile</a>
        </div>
    </header>

   
    <main>
        <h2>Complaint Box</h2>
        <table>
            <thead>
                <tr>
                    <th>Complainant Name</th>
                    <th>Post Account</th>
                    <th>Post Details</th>
                    <th>Complaint</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="complaintTable">
                <tr>
                    <td>user1</td>
                    <td>user1@example.com</td>
                    <td>Sheikh Hasina is found dead...</td>
                    <td>Inappropriate content</td>
                    <td class="action-buttons">
                        <button class="ignore" onclick="ignoreComplaint(this)">Ignore</button>
                        <button class="delete" onclick="deletePost(this)">Delete Post</button>
                        <button class="ban" onclick="banAccount(this)">Ban Account</button>
                        <button class="warning" onclick="Warning(this)">Warning</button>
                    </td>
                </tr>
                <tr>
                    <td>user2</td>
                    <td>user2@example.com</td>
                    <td>Lorem ipsum dolor sit amet...</td>
                    <td>Spam</td>
                    <td class="action-buttons">
                        <button class="ignore" onclick="">Ignore</button>
                        <button class="delete" onclick="deletePost(this)">Delete Post</button>
                        <button class="ban" onclick="banAccount(this)">Ban Account</button>
                        <button class="warning" onclick="Warning(this)">Warning</button>

                    </td>
                </tr>
            </tbody>
        </table>
    </main>

</body>
</html>
