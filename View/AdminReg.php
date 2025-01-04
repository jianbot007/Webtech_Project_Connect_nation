<?php 

session_start();

if (isset($_SESSION["username"])) {
        ?>

<html>
<head>
  
    <title>Admin Registration</title>
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
            max-width: 600px;
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

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-size: 14px;
            color: #555;
        }

        input, select, button {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

    

        button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
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
        <h2>Admin Registration</h2>
        <form method="post" action="../controller/AdminRegCheck.php" enctype="">
            ID:
            <input type="text" id="id" name="id" placeholder="Enter ID">

            Username:
            <input type="text" id="username" name="username" placeholder="Enter Username">

            Password:
            <input type="password" id="password" name="password" placeholder="Enter Password">

           Email:
            <input type="email" id="email" name="email" placeholder="Enter Email">

            Full Name:
            <input type="text" id="fullname" name="fullname" placeholder="Enter Full Name">

            Gender:
            <select id="gender" name="gender">
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            Date of Birth
            <input type="date" id="dob" name="dob">

            Phone Number:
            <input type="tel" id="phone" name="phone" placeholder="Enter Phone Number">

            <input type="submit" name="submit" value="Submit" />
        </form>
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
