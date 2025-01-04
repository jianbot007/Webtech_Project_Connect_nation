<?php 
include('../Model/DeletedPostModel.php');
session_start();
if(isset($_SESSION['username'])){
?>

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
            <?php 
                $posts = getAllPost();
                if($posts){
                foreach($posts as $post){
                    ?>
                <tr>
                    <td><?php echo ($post['accountname']); ?></td>
                    <td><?php echo ($post['deletedtime']); ?></td>
                    <td><?php echo ($post['posttime']); ?></td>
                    <td><?php echo ($post['postid']); ?></td>
                    <td><?php echo ($post['postdetails']); ?></td>

                </tr>
                <?php } ?>
            </tbody>
        </table>
       
    </main>


</body>
</html>

<?php
        
}
else {
    echo "Database Connection lost or No user";
}
}
else {
    echo"Please Login First";
    header('location: ../view/login.html');
    exit();
}
?>


