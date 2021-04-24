<?php
require_once 'databaseconn.php';
// $showAlert = false;
// $showError = false;
session_start();
$exists = false;

if ($_SERVER) {
    //include the db connection file
    include './Process/databaseconn.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // $sql = "Select * from users where username='$username'";

    // $value = mysqli_query($conn, $sql);

    // $numRow = mysqli_num_rows($value);

    // if ($numRow == 0) {
        if (($password == $cpassword) && $exists == false) {
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $mysqli->query("INSERT INTO users (username, email, password, cpassword) VALUES('$username', 'email', 'password', 'cpassword')") or die($mysqli->error);

            $_SESSION['message'] = "You have successfully been registered!";
            $_SESSION['msg_type'] = "success";

            header("location: login.php");
            // $sql = "INSERT INTO `users` ( `username`, 
            //     `email`, `password`) VALUES ('$username', 
            //     '$email', '$passwordHash')";

            // $value = mysqli_query($conn, $sql);

            // if($value) {
            //     $_SESSION['success'] = "You Have successfully registered 😁";
            //     // header("location:submit_page.php");
            // }
        }
    // }
}
