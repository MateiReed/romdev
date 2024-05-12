
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./stylelogin.css">
    <script src="./index.js"></script>
    <script src="https://kit.fontawesome.com/492fd5106e.js" crossorigin="anonymous"></script>
    <title>Log In Page</title>
    <script>
  function onClick(e) {
    e.preventDefault();
    grecaptcha.enterprise.ready(async () => {
      const token = await grecaptcha.enterprise.execute('6LdSgdkpAAAAAKEVD_Li2KsicXY1EyVO1yi7gzi0', {action: 'LOGIN'});
    });
  }
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
        .test{
            margin: auto;
            text-align: center;
            position: relative;
            bottom: 400px;
             color: red;
        }
    </style>
</head>
<body>
    <section id="landing-page">
        <nav>
            <li class="nav__link">
                <a class="nav__link--anchor link__hover-effect link__hover-effect--black">Home</a>
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


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verificăm în baza de date dacă există un utilizator cu acest nume
    $sql = "SELECT * FROM conturi WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
            // Autentificare reușită
            $_SESSION['username'] = $username;
            header("Location: index.php"); // Redirecționează către pagina de control
            exit;
        } else {
            echo "<div class='test'>Parolă incorectă.</div>";
        }
    } else 
     

?>