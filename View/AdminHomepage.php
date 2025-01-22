<?php 

session_start();
include("../Model/AdvertisementListModel.php");

if (isset($_SESSION["username"])) {
?>
<html>
<head>
    
    <title>Admin Homepage</title>
    <style>
        body {
            background-color:rgb(255, 255, 255);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            padding: 10px 20px;
            background:rgb(52, 58, 64);
            color:rgb(255, 255, 255) ;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header a {
            color:rgb(0, 123, 255);
            text-decoration: none;
            margin-left: 15px;
        }
        .container {
            display: grid;
            grid-template-columns: 1fr 2fr 1fr;
            gap: 10px;
            padding: 10px;
        }

        .left-menu {
            background-color:;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .left-menu button {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
        }

        .left-menu button:hover {
            background-color: #0056b3;
        }

        .middle-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.1);
        }

   

        .right-ad {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .ad-item {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <header>
        CONNECT NATION
    </header>

    <div class="container">
        <div class="left-menu">
            <button onclick="window.location.href='AdminSettings.php'">Admin Settings</button>
            <button onclick="window.location.href='BannedAccount.php'">Banned Accounts</button>
            <button onclick="window.location.href='DeletedPosts.php'">Deleted Posts</button>
            <button onclick="window.location.href='ComplainBox.php'">Complaint Box</button>
            <button onclick="window.location.href='PremiumAccount.php'">Premium Accounts</button>
            <button onclick="window.location.href='BoastPosts.php'">Boast Posts</button>
            <button onclick="window.location.href='AdvertisementManage.php'">Advertisement Management</button>
            <button onclick="window.location.href='../Controller/Logout.php'">Log Out</button>
            
        </div>
        <div class="middle-content">
            <div >
                <h3>User Post Title</h3>
                <p>User Content.</p>
            </div>
        </div>

        
        <div class="right-ad">
            <?php 
            $Ads = getAllAdvertisement();
            
            foreach($Ads as $Ad){
                   if($Ad['status'] == "Active"){
                ?>
            <div class="ad-item">
                <h4><?php echo $Ad['productname'] ?></h4>
                <p>POST DETAILS</p>
            </div>
            <?php  }} ?>
        </div>
    </div>
</body>
</html>
<?php } else {
    echo "Please Login First";
    header('location: ../view/login.html');
    exit();
} ?>
