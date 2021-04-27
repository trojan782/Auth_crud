<?php
include("./Process/databaseconn.php");

session_start();

if(($_SERVER["REQUEST_METHOD"] == 'POST')) {
    $username = $_SESSION['username'];
    // $Password = $_POST['password'];
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE username = $username");
    $row = mysqli_fetch_array($sql); 
    $newPassword = password_hash($password, PASSWORD_DEFAULT);
    echo $newPassword;
    if(is_array($row) && $row > 0) {
      mysqli_query($conn, "UPDATE users SET password='$newPassword' WHERE username='$username'");
        if($sql) {
           header("location: login.php");
        }
        else {
            echo "password not updated!";
            header("location: reset.php");
        }
    }
}
