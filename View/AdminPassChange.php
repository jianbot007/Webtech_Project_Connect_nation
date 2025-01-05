<?php 

session_start();

if (isset($_SESSION["username"])) {
        ?>

<html>
<head>
    <title>Change Password</title>
    <style>
        body {
            background-color: #f0f0f0;
        }

        header {
            align-items: center;
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

        form {
            display: flex;
            flex-direction: column;
        }

        input, button {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
    <div>CONNNECT NATION</div>
        <div>
            <a href="AdminHomepage.php">Home</a>
            <a href="AdminSettings.php">Back</a>
        </div>
    </header>
    <main>
        <h2>Change Password</h2>
        <form method="post" action="../controller/AdminPassChangeCheck.php" enctype="">
            Old Password:
            <input type="password" name="oldPassword" placeholder="Enter Old Password">

            New Password:
            <input type="password" name="newPassword" placeholder="Enter New Password">

            Confirm New Password:
            <input type="password" name="confirmPassword" placeholder="Confirm New Password">

            <input type="submit" name="submit" value = "Confirm">
        </form>
    </main>
    </script>
</body>
</html>

<?php } 

else {
    echo"Please Login First";
    header('location: ../view/login.html');
    exit();
}

?>
