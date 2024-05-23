<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/stylelogin.css">
    <script src="https://kit.fontawesome.com/492fd5106e.js" crossorigin="anonymous"></script>
    <title>Log In Page</title>
    <script>
</script>
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
        .eroare{
            margin: auto;
            text-align: center;
            position: relative;
            bottom: 400px;
             color: red;
        }
        .h2{
            color: black;
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
                <a href="./signup.php" class="nav__link--anchor link__hover-effect link__hover-effect--black">Sign Up</a>
            </li>

        </nav>

        <div class="h2">

<h2>Log In</h2></div>
<br />



        <form action="" method="post">
            <label for="username"><b>Username:</b></label>
            <input type="text" name="username" id="username" placeholder="Enter Username" required>

            <label for="password"><b>Password:</b></label>
            <input type="password" name="password" id="password" placeholder="Enter Password" required>

            <button type="submit">Log In</button>
            </form>
      
    </section>
    </section>
</body>
</html>

<?php
session_start();
include 'connection.php';
include 'db.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $stmt = $conn->prepare("SELECT * FROM conturi WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password); 
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $username;
        header("Location: pagina.php");
        exit;
    } else {
        echo "<div class='eroare'>Parolă incorectă.</div>";
    }
}
