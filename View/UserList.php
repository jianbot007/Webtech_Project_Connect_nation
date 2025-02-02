<?php
include("../Model/userListModel.php");
session_start();
if($_SESSION['username']){

    $Users = getAlluser();
    
?>

<html>
<head>
   
    <title>User Details Table</title>
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

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            margin: 20px 0;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
            color: #333;
        }

    </style>
</head>
<body>
<header>
        <div>CONNECT NATION</div>
        <div>
            <a href="AdminHomepage.php">Home</a>
            <a href="AdminSettings.php">Back</a>
        </div>
    </header>

        <h2>User Details</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>ID Status</th>
                    <th>Live In</th>
                    <th>University</th>
                    <th>College</th>
                    <th>Hometown</th>
                    <th>Date of Birth</th>
                </tr>
            </thead>
            <tbody>
             
                <tr>
                    <?php
                   foreach($Users as $user){
                    ?>
                    <td><?php echo ($user['id']); ?></td>
                    <td><?php echo ($user['name']); ?></td>
                    <td><?php echo ($user['password']); ?></td>
                    <td><?php echo ($user['email']); ?></td>
                    <td><?php echo ($user['id_status']); ?></td>
                    <td><?php echo ($user['livein']); ?></td>
                    <td><?php echo ($user['university']); ?></td>
                    <td><?php echo ($user['college']); ?></td>
                    <td><?php echo ($user['hometown']); ?></td>
                    <td><?php echo ($user['dob']); ?></td>
                </tr>
              <?php } ?>
            </tbody>
                   </table>
</body>
</html>
<?php
}

else{
    header('location:login.html');
}
?>

?>