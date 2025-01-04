<html>
<head>
   
    <title>Premium Account Request</title>
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
            cursor: pointer;
        }

        button:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
<header>
        <div>CONNECT NATION</div>
      
        <div>
            <a href="AdminHomepage.php">Home</a>s
            <a href="#">Profile</a>
        </div>
    </header>

    <main>
        <h2>Request Premium Account</h2>
        <form action="../Controller/PremiumAccountCheck.php" method="POST">
            Account Name :
            <input type="text" id="premiumName" name="premiumName" placeholder="" >

           Website URL :
            <input type="url" id="websiteURL" name="websiteURL" placeholder="https://example.com">

            Website Name :
            <input type="text" id="websiteName" name="websiteName" placeholder="Enter Website Name">

            Type :
            <select id="type" name="type" >
                <option value="Media Channel">Media Channel</option>
                <option value="Website Based News Portal">Website Based News Portal</option>
                <option value="Newspaper">Newspaper</option>
            </select>

            Subscription End Date :
            <input type="date" id="subscribeEnd" name="subscribeEnd">

            <input type="submit" name="submit" value="Submit" />
        </form>
    </main>
</body>
</html>
