<?php
include("databaseconn.php");
session_start();
if (($_SERVER["REQUEST_METHOD"] == 'POST')) {
    extract($_POST);
    $username = $_POST['username'];
    $sql = mysqli_query($conn, "SELECT * FROM users where username='$username'");
    $row  = mysqli_fetch_array($sql);

    if (is_array($row) && $row > 0) {
        if(password_verify($_POST['password'], $row['password'])) {
            $_SESSION['username'] = $username;
            header("Location: ./dashboard/index.php");
        }
        else{
            $_SESSION['message'] = "Wrong  username and password, please try again!";
            $_SESSION['msg_type'] = 'danger';
        }
    }
}
