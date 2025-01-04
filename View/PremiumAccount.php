<?php 
include('../Model/PremiumAccountModel.php');
session_start();
if(isset($_SESSION['username'])){

?>


<html>
<head>
    <title>Premium Accounts</title>
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
            margin-bottom: 10px;
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

        .action-buttons button.details {
            background-color: #007bff; 
        }

        .action-buttons button.reminder {
            background-color: #ffa500; 
        }

        .action-buttons button.accept {
            background-color: #28a745; 
        }

        .action-buttons button.reject {
            background-color: #dc3545; 
        }

        .action-buttons button:hover {
            opacity: 0.9;
        }

        .section {
            margin-bottom: 40px;
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
        <div class="section">
            <h2>Premium Accounts List</h2>
            <table>
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Premium Account Name</th>
                        <th>Premium End Date</th>
                        <th>Days Left</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="premiumList">
                    <?php 
                    $Accounts = getAllPremiumAccounts();
                   if($Accounts != null){
                    foreach($Accounts as $Account){
                        if($Account['Active'] == true){
                    
?>
                    <tr>
                        <td><?php echo $Account['username'] ?></td>
                        <td><?php echo $Account['Paccountname'] ?></td>
                        <td><?php echo $Account['enddate'] ?></td>
                        <td><?php echo $Account['remDays'] ?></td>
                        <td class="action-buttons">
                            <button class="reminder" onclick="">Send Reminder</button>
                            <button class="details" onclick="">User Details</button>
                        </td>
                    </tr>
    <?php }}
     ?>
                </tbody>
            </table>
        </div>

      
        <div class="section">
            <h2>Premium Account Requests</h2>
            <table>
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Account Name</th>
                        <th>End date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="premiumRequests">
                    <?php 
                     foreach($Accounts as $Account){
                   if($Account['Active'] == false){
                    ?>
                    <tr>
                        <td> <?php echo $Account['username']?>  </td>
                        <td><?php echo $Account['Paccountname'] ?></td>
                        <td><?php echo $Account['enddate'] ?></td>
                        <td class="action-buttons">
                            <button class="details" onclick= "window.location.href = 'PremiumUserRequestDetails.php?accountname=<?php echo ($Account['Paccountname']); ?>'">Details</button>
                            <button class="accept" onclick="acceptRequest(this)">Accept</button>
                            <button class="reject" onclick="rejectRequest(this)">Reject</button>
                        </td>
                    </tr>
                    <?php }}?>
                </tbody>
            </table>
          
        </div>
    </main>
</body>
</html>

<?php

               }

else{
    echo "Database is empty or connection loss";
}
                   
}
else{
    header('location: login.php');
}
?>
