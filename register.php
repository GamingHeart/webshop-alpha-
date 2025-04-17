<?php
    require("connection.php");

    if(isset($_POST["submit"])) {
        var_dump($_POST);

        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

        $stmt = $con->prepare("SELECT * FROM users WHERE username=:username OR email=:email");
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        header("Location: login.php");

        $userAlreadyExists = $stmt->fetchColumn();

        if(!$userAlreadyExists) {
            //regestrieren
            registerUser($username, $email, $password);
        }
        else {
            //user already exists
        }

    }

    function registerUser($username, $email, $password) {
        global $con;
        $stmt = $con->prepare("INSERT INTO users(username, email, password) VALUES(:username, :email, :password)");
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);
        $stmt->execute();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebShop - Register</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body class="register-page">
    <section id="register" class="register">
        <div class="wrapper">
            <form action="register.php" method="post">
                <h1>Create a account</h1>
                <div class="input-box">
                    <input type="text" placeholder="Username" name="username" autocomplete="off">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Email" name="email" autocomplete="off">
                    
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password" name="password" autocomplete="off">
                    <i class="bx bxs-lock-alt"></i>
                </div>
                <button name="submit" class="btn">Create</button>
            </form>
        </div>
    </section>
</body>
</html>