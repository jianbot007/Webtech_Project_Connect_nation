<?php
include("../Model/adminListModel.php");


session_start();

if (isset($_SESSION["username"])) {

?>
<html>
<head>

    <title>Admin List</title>
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
            max-width: 800px;
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th, table td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #f4f4f4;
        }

        .button-container {
            text-align: center;
        }

        .button-container a {
            padding: 10px 15px;
            font-size: 16px;
            color: white;
            text-decoration: none;
            background-color: #007bff;
            border-radius: 5px;
            margin-right: 10px;
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
        <h2>Admin List</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Full Name</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Mobile No</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $Admins = getAllAdmin();

                if($Admins){
                    foreach($Admins as $Admin){

                
                

                ?>
                <tr>
                    <td><?php echo ($Admin['ID']); ?></td>
                    <td><?php echo ($Admin['username']); ?></td>
                    <td><?php echo ($Admin['email']); ?></td>
                    <td><?php echo ($Admin['fullname']); ?></td>
                    <td><?php echo ($Admin['dob']); ?></td>
                    <td><?php echo ($Admin['gender']); ?></td>
                    <td><?php echo ($Admin['mobileno']); ?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>

        <div class="button-container">
            <a href="AdminSettings.php">Back</a>
        </div>
    </main>
</body>
</html>


<?php 
                }
else{
    echo "Databse connection error or empty table";
}
?>

<?php } 

else {
    echo"Please Login First";
    header('location: ../view/login.html');
    exit();
}

?>