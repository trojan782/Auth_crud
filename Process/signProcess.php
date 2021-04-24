<?php
// require_once 'databaseconn.php';
// $showAlert = false;
// $showError = false;
include './Process/databaseconn.php';

session_start();
$exists = false;

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $res = $mysqli->query("SELECT * FROM users WHERE username = '$username'");
    $row = $res->fetch_array();
    if(count($row) == 0) {
        if (($password == $cpassword)) {
            $hashedPass = password_hash($password, PASSWORD_DEFAULT);
            $result = $mysqli->query("INSERT INTO users (username, email, password) VALUES('$username', '$email', '$hashedPass')") or die($mysqli->error);
            if ($result) {
                $_SESSION['message'] = "You have successfully been registered!";
                $_SESSION['msg_type'] = "success";
                header("location: login.php");
            }if(!$result) {
                $_SESSION['message'] = "There was a problem registering you!";
                $_SESSION['msg_type'] = "danger";
                header("location: signup.php");
            }
        }
    }
    if($row['username'] > 0) {
        $_SESSION['message'] = "Username is unavaliable";
        $_SESSION['msg_type'] = "warning";
        header("location: signup.php");
    }
}
