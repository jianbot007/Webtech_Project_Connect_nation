<html>
<head>
   
    <title>Deleted Posts</title>
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
            background-color: #007bff;
            color: white;
            cursor: pointer;
            border-radius: 3px;
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
            <a href="AdminHomepage.php">Home</a>
            <a href="#">Profile</a>
        </div>
    </header>


    <main>
        <h2>Deleted Posts</h2>
        <table>
            <input type="text" placeholder="Enter Account Name...." />
            <thead>
                <tr>
                    <th>Account Name</th>
                    <th>Deleted Time</th>
                    <th>Posted Time</th>
                    <th>Post ID</th>
                    <th>Post Details</th>
                </tr>
            </thead>
            <tbody id="deletedPosts">
                <tr>
                    <td>user1@example.com</td>
                    <td>2024-12-01 12:30 PM</td>
                    <td>2024-11-25 3:45 PM</td>
                    <td>POST12345</td>
                    <td>Sheikh hasina came back to Bangaldesh</td>

                </tr>
                <tr>
                    <td>user1@example.com</td>
                    <td>2024-12-01 12:30 PM</td>
                    <td>2024-11-25 3:45 PM</td>
                    <td>POST12345</td>
                    <td>Sheikh hasina came back to Bangaldesh</td>

                </tr>
                <tr>
                    <td>user1@example.com</td>
                    <td>2024-12-01 12:30 PM</td>
                    <td>2024-11-25 3:45 PM</td>
                    <td>POST12345</td>
                    <td>Sheikh hasina came back to Bangaldesh</td>

                </tr>
            
            </tbody>
        </table>
       
    </main>


</body>
</html>
