<?php 

session_start();

if (isset($_SESSION["username"])) {
        ?>
<html>
<head>
    <title>Admin Navigation</title>
    <style>
        body {
            background-color: #f0f0f0;
        }

        header {
            padding: 10px;
            background: #ccc;
        }

        header a {
            margin-left: 10px;
            color: #000;
        }

        main {
            margin: 20px auto;
            width: 90%;
            max-width: 600px;
            background: #fff;
            padding: 20px;
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
            padding : 15px;
        }
        .button-container a {
            padding: 10px 15px;
            font-size: 16px;
            color: white;
            text-align: center;
            background-color:rgb(0, 119, 246);
        }
    </style>
</head>
<body>
    <header>
<div>CONNNECT NATION</div>
        <div>
            <a href="AdminHomepage.php">Home</a>
        </div>
    </header>

    <main>
        <h2>Admin Navigation</h2>
        <div class="button-container">
            <a href="AdminList.php">Admin List</a>
            <a href="AdminPassChange.php">Password Change</a>
            <a href="AdminEditProfile.php">Edit Profile</a>
            <a href="UserList.php">User List</a>
            <a href="AdminReg.php">Create a New Admin</a>
            <a href="AdminDetailsDelete.php">Delete this Account</a>
        </div>
    </main>
</body>
</html>


<?php } 

else {
    echo"Please Login First";
    header('location: ../view/login.html');
    exit();
}

?>


