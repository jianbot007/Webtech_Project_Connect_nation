<?php
include("../Model/adminListModel.php");


session_start();

if (isset($_SESSION["username"])) {
    
   $Admin = getUser($_SESSION["username"]);
?>

<html>
<head>
    <title>Update Admin Details</title>
    <style>
        body {
            background-color: #f0f0f0;
        }

        header {
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
            gap: 15px;
        }

        input, select, button {
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #007bff;
            color: white;
      
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

    <main>
        <h2>Update Admin Details</h2>
        <form action="../Controller/AdminEditProfileCheck.php" method="POST">
           Name
            <input type="text" name="fullname" placeholder="<?php echo $Admin['fullname']; ?>" >

            Phone Number
            <input type="text" name="phone" placeholder="<?php echo $Admin['mobileno']; ?>" >

            Email
            <input type="email" id="email" name="email" placeholder="<?php echo $Admin['email']; ?>">

            Date of Birth
            <input type="date" id="dob" name="dob">

            Gender
            <select id="gender" name="gender" >
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>

            <input type="submit" name="submit" value = "Confirm">
        </form>
    </main>
</body>
</html>
<?php 
}            
else {
    echo"Please Login First";
    header('location: ../view/login.html');
    exit();
}

?>