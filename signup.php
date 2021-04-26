<?php require_once './Process/test.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    if (isset($_SESSION["message"])) : ?>

        <div class="alert alert-<?= $_SESSION['msg_type'] ?>">

            <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>

        </div>
    <?php endif; ?>
    <div class="container">
        <div class="login">
            <div class='bold-line'></div>
            <div class='container'>
                <div class='window'>
                    <div class='overlay'></div>
                    <div class='content'>
                        <div class='welcome'>Hello There!</div>
                        <div class='subtitle'>Create an account with us!</div>
                        <form action="" method="post">
                            <div class='input-fields'>
                                <input type='text' placeholder='Username' name="username" class='input-line full-width' required></input>
                                <input type='email' placeholder='Email' name="email" class='input-line full-width' required></input>
                                <input type='password' placeholder='Password' name="password" class='input-line full-width' required></input>
                                <input type='password' placeholder='Confirm Password' name="cpassword" class='input-line full-width' required></input>
                            </div>
                            <div class='spacing'>Already a member?<a href="login.php" class='highlight'>Login</a></div>
                            <div><button class='ghost-round full-width' name="signup">Create Account</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>