<?php 
include('../Model/complainlistModel.php');
session_start();

if (isset($_SESSION["username"])) {
        
?>

<html>
<head>
   
    <title>Complaint Box</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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
            color: white;
            cursor: pointer;
            border-radius: 3px;
            margin-right: 5px;
        }

        .action-buttons button.warning{
            background-color: #3c657d; 
        }

        .action-buttons button.ignore {
            background-color: #6c757d; 
        }

        .action-buttons button.delete {
            background-color: #dc3545;
        }

        .action-buttons button.ban {
            background-color: #007bff;
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
        <h2>Complaint Box</h2>
        <table>
            <thead>
                <tr>
                    <th>Complainant Name</th>
                    <th>Post Account</th>
                    <th>Post Details</th>
                    <th>Complaint</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="complaintTable">
            <?php 
                $complains = getAllcomplan();
                if($complains){
                foreach($complains as $complain){
                    ?>
                <tr>
                    <td><?php echo ($complain['complaintname']); ?> </td>
                    <td><?php echo ($complain['accountname']); ?> </td>
                    <td><?php echo ($complain['postdetails']); ?> </td>
                    <td><?php echo ($complain['complaint']); ?> </td>
                    <td class="action-buttons">
                        <button class="ignore" onclick="deleteComplain($complain['postid'])">Ignore</button>
                        <button class="delete" onclick="deletePost($complain['postid'])">Delete Post</button>
                        <button class="ban" onclick="banAccount($complain['postid')">Ban Account</button>
                        <button class="warning" onclick="Warning($complain['postid')">Warning</button>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>

</body>
</html>

<?php }
else{
    echo "Table is empty or Database conncetion failed";
}
}
else {
    echo"Please Login First";
    header('location: ../view/login.html');
    exit();
}
// function DeleteComplain($id){
//     deleteComplain($postid);
// }
?>

