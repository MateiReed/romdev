<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $email = htmlspecialchars($_POST['email']);

    try {
        // Conectare la baza de date
        $conn = new mysqli('localhost', 'admin', 'test', "romdev");

        if ($conn->connect_error) {
            throw new Exception("Connection failed: " . $conn->connect_error);
        }

        // Declaratie pregatita pentru inserarea datelor
        $sql = "INSERT INTO conturi (username, password, email) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);

        // Legare parametri și executare
        $stmt->bind_param("sss", $username, $password, $email);
        if ($stmt->execute()) {
        echo "Cont creat cu succes!";
        
        header("Location: login.php");
    exit;}
        else {
            throw new Exception("Error: " . $sql . "<br>" . $conn->error);
        }

        // Inchiderea declaratiei si a conexiunii
        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./stylelogin.css">
    <script src="./index.js"></script>
    <script src="https://kit.fontawesome.com/492fd5106e.js" crossorigin="anonymous"></script>
    <title>Sign Up Page</title>
    <style>
        body {
            background-color: #ffffff;
            font-family: Arial, sans-serif;
        }
        form {
            background-color: #ffffff0e;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 2px solid #a7a7a7;
            border-radius: 5px;
            box-shadow: 0px 2px 5px #ccc;
        }
        input[type=text], input[type=password], input[type=email] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            border: 1px solid #cccccc;
            border-radius: 4px;
        }
        button {
            background-color: #FCE09B;
            color: rgb(0, 0, 0);
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #a58e54;
        }
    </style>
</head>
<body>
    <section id="landing-page">
        <nav>
            <li class="nav__link">
                <a href="./index.html" class="nav__link--anchor link__hover-effect link__hover-effect--black">Home</a>
            </li>
            <li class="nav__link">
                <a href="./index.php" class="nav__link--anchor link__hover-effect link__hover-effect--black">Log In</a>
            </li>
        </nav>

        <div class="h2">

<h2>Create an account</h2></div>
<br />

        <form action="" method="post">
        <!-- <form action="connect.php" method="post"> -->
            <label for="username"><b>Username:</b></label>
            <input type="text" name="username" id="username" placeholder="Enter Username" required>

            <label for="password"><b>Password:</b></label>
            <input type="password" name="password" id="password" placeholder="Enter Password" required>

            <label for="email"><b>Email:</b></label>
            <input type="email" name="email" id="email" placeholder="Enter Email" required>

            <button type="submit">Create Account</button>
        </form>
    </form>
    </section>
</body>
</html>
