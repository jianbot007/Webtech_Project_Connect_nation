<?php 
include('../Model/bannedlistModel.php');

?>


<html>
<head>
    <title>Banned Accounts</title>
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

        .section {
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        button {
            padding: 5px 10px;
            border: none;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            border-radius: 3px;
        }

        button.unban {
            background-color: #28a745;
        }

        button:hover {
            opacity: 0.9;
        }

        input[type="text"] {
            padding: 8px;
            width: calc(100% - 120px);
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .buttons {
            display: flex;
            gap: 10px;
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
            <h2>Banned Account List</h2>
            <table>
                <thead>

                    <tr>
                        <th>Account Name</th>
                        <th>Reason for Ban</th>
                        <th>Banned time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="bannedAccounts">
                <?php 
                $banaccs = getAllbanAccount();
                if($banaccs){
                foreach($banaccs as $acc){
                    ?>
                    <tr>
                    <td><?php echo ($acc['accountname']); ?> </td>
                        <td><?php echo ($acc['reason']); ?></td>
                        <td><?php echo ($acc['bannedtime']); ?></td>
                        <td><button class="unban" onclick="">Unban</button></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>

<?php }
else{
    echo "Table is empty or Database conncetion failed";
}
?>

