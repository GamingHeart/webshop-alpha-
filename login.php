<?php
    session_start();
    require("connection.php");

    if(isset($_POST["submit"])) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        $stmt = $con->prepare("SELECT * FROM users WHERE username=:username");
        $stmt->bindParam(":username", $username);
        $stmt->execute();
        $userExists = $stmt->fetchAll();
        var_dump($userExists);

        $passwordHashed = $userExists[0]["password"];
        $checkPassword = password_verify($password, $passwordHashed);

        if($checkPassword === true) {
            $_SESSION["username"] = $userExists[0]["username"];

            header("Location: index.php");
            exit();
        }
        else {
            echo "Bad password";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebShop - Login</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body class="login-page">
    <section id="login" class="login">
        <div class="wrapper">
            <form action="login.php">
                <h1>Login</h1>
                <div class="input-box">
                    <input type="text" placeholder="Username required" >
                    <i class='bx bx-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password required">
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="register-link">
                    <p>Don't have a account? <a href="register.php">Register</a></p>
                </div>
            </form>
        </div>
    </section>    
</body>
</html>