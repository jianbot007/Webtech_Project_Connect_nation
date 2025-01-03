
<html>
<head>
    <title>Admin Navigation</title>
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

        .button-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .button-container a {
            display: inline-block;
            padding: 10px 15px;
            font-size: 16px;
            color: white;
            text-decoration: none;
            text-align: center;
            background-color: #007bff;
            border-radius: 5px;
        }

        .button-container a:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <header>
<div>CONNNECT NATION</div>
        <div>
            <a href="AdminHomepage.php">Home</a>
            <a href="#">Profile</a>
        </div>
    </header>

    <main>
        <h2>Admin Navigation</h2>
        <div class="button-container">
            <a href="AdminList.php">Admin List</a>
            <a href="AdminPassChange.php">Password Change</a>
            <a href="AdminEditProfile.php">Edit
            <a href="userList.php">User List</a>
            <a href="AdminReg.php">Create a New Admin</a>
            <a href="AdminDetailsDelete.php">Delete this Account</a>
        </div>
    </main>
</body>
</html>



