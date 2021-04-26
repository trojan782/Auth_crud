<?php require_once './Process/loginProcess.php'?>
<? //php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="login">
            <div class='bold-line'></div>
            <div class='container'>
                <div class='window'>
                    <div class='overlay'></div>
                    <div class='content'>
                        <div class='welcome'>Hello Welcome back!</div>
                        <form action="" method="post">
                            <div class='input-fields'>
                                <input type='text' name = "username" placeholder='Username' class='input-line full-width' required></input>
                                <input type='password' name = "password" placeholder='Password' class='input-line full-width'></input>
                            </div>
                            <div class='spacing'>or <a href="signup.php" class='highlight'>sign up</a></div>
                            <div><button class='ghost-round full-width' name="login">Login</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
<!-- https://freefrontend.com/css-login-forms/ -->