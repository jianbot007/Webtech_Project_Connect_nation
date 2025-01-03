<?php 

session_start();

if (isset($_SESSION["username"])) {
    if(isset($_SESSION["Login"])){
        ?>
<html>
<head>
  
    <title>Admin Homepage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
  

        main {
            background: #fff; 
        }

        h2 {
            color: #333;
        }
        input[type="text"] {
            padding: 8px;
            width: calc(100% - 120px);
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        header a {
            margin-left: 10px;
            text-decoration: none;
            color: #000;
        }

        button {
            border: none;
            background-color: #007bff;
            color: white;
            cursor: pointer; 
        }
    </style>
</head>
<body>
    <header>
        <div style="display: flex; justify-content: space-between; align-items: center; padding: 10px; background: #ccc;">
            <div>CONNECT NATION</div>
            <input type="text" placeholder="Search..." style="width: 200px;">
            <div>
                <a href="#">Profile</a>
            </div>
        </div>
    </header>

    <main style="display: flex;">
        <aside style="width: 20%; padding: 10px; background: #eee;">
            <ul style="list-style-type: none; padding: 0;">
                <button onclick="window.location.href='AdminSettings.php'">Admin Settings</button><br><br>
                <button onclick="window.location.href='BannedAccount.php'">Banned Account</button><br><br>
                <button onclick="window.location.href='DeletedPosts.php'">Deleted Post</button><br><br>
                <button onclick="window.location.href='ComplainBox.php'">Complaint Box</button> <br><br>
                <button onclick="window.location.href='PremiumAccount.php'">Premium Accounts</button><br><br>
                <button onclick="window.location.href='BoostRequest.php'">Boost Posts</button><br><br>
                <button onclick="window.location.href='AdvertisementManage.php'">Advertisement Management</button><br><br>
                <button onclick="window.location.href='../Controller/Logout.php'">Log Out</button><br><br>

            </ul>
        </aside>

        <section style="width: 60%; padding: 10px; background: #fff;">
            <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
                <p>Boosted Post content goes here...</p>
                <div style="display: flex; justify-content: space-between;">
                    <button onclick="_">Like</button>
                    <button>Comment</button>
                    <button>Share</button>
                </div>
            </div>
            <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
                <p> Boosted Post content goes here...</p>
                <div style="display: flex; justify-content: space-between;">
                    <button onclick="_">Like</button>
                    <button>Comment</button>
                    <button>Share</button>
                </div>
            </div>
            <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
                <p>Post content goes here...</p>
                <div style="display: flex; justify-content: space-between;">
                    <button onclick="_">Like</button>
                    <button>Comment</button>
                    <button>Share</button>
                </div>
            </div>
            <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
                <p>Post content goes here...</p>
                <div style="display: flex; justify-content: space-between;">
                    <button onclick="_">Like</button>
                    <button>Comment</button>
                    <button>Share</button>
                </div>
            </div>
            <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
                <p>Post content goes here...</p>
                <div style="display: flex; justify-content: space-between;">
                    <button onclick="_">Like</button>
                    <button>Comment</button>
                    <button>Share</button>
                </div>
            </div>
            <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
                <p>Post content goes here...</p>
                <div style="display: flex; justify-content: space-between;">
                    <button onclick="_">Like</button>
                    <button>Comment</button>
                    <button>Share</button>
                </div>
            </div>
            <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
                <p>Post content goes here...</p>
                <div style="display: flex; justify-content: space-between;">
                    <button onclick="_">Like</button>
                    <button>Comment</button>
                    <button>Share</button>
                </div>
            </div>
            <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
                <p>Post content goes here...</p>
                <div style="display: flex; justify-content: space-between;">
                    <button onclick="_">Like</button>
                    <button>Comment</button>
                    <button>Share</button>
                </div>
            </div>
            <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
                <p>Post content goes here...</p>
                <div style="display: flex; justify-content: space-between;">
                    <button onclick="_">Like</button>
                    <button>Comment</button>
                    <button>Share</button>
                </div>
            </div>
            <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
                <p>Post content goes here...</p>
                <div style="display: flex; justify-content: space-between;">
                    <button onclick="_">Like</button>
                    <button>Comment</button>
                    <button>Share</button>
                </div>
            </div>
            <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
                <p>Post content goes here...</p>
                <div style="display: flex; justify-content: space-between;">
                    <button onclick="_">Like</button>
                    <button>Comment</button>
                    <button>Share</button>
                </div>
            </div>
            <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
                <p>Post content goes here...</p>
                <div style="display: flex; justify-content: space-between;">
                    <button onclick="_">Like</button>
                    <button>Comment</button>
                    <button>Share</button>
                </div>
            </div>
        </section>

       
        <aside style="width: 20%; padding: 10px; background: #eee;">
            <div style="border: 1px solid #ccc; height: 100px; margin-bottom: 10px;">Ad Space</div>
            <div style="border: 1px solid #ccc; height: 100px; margin-bottom: 10px;">Ad Space</div>
            <div style="border: 1px solid #ccc; height: 100px; margin-bottom: 10px;">Ad Space</div>

        </aside>
    </main>
</body>
</html>
<?php } 

else{
    echo "Please Login first";
}
}

else {
    echo"Please Login First";
}

?>