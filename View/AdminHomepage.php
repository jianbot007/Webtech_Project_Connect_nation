<?php 

session_start();

if (isset($_SESSION["username"])) {
        ?>
<html>
<head>
    <title>Admin Homepage</title>
    <style>
        body {
            background-color: #f0f0f0;
        }

        main {
            background: #fff; 
        }

        header a {
            margin-left: 10px;
            color: #000;
        }

        button {
            background-color: #007bff;
            color: white; 
        }
    </style>
</head>
<body>
    <header>
            CONNECT NATION
    </header>

    <main >
            <ul>
                <button onclick="window.location.href='AdminSettings.php'">Admin Settings</button><br><br>
                <button onclick="window.location.href='BannedAccount.php'">Banned Account</button><br><br>
                <button onclick="window.location.href='DeletedPosts.php'">Deleted Post</button><br><br>
                <button onclick="window.location.href='ComplainBox.php'">Complaint Box</button> <br><br>
                <button onclick="window.location.href='PremiumAccount.php'">Premium Accounts</button><br><br>
                <button onclick="window.location.href='AdvertisementManage.php'">Advertisement Management</button><br><br>
                <button onclick="window.location.href='../Controller/Logout.php'">Log Out</button><br><br>

            </ul>
    

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

