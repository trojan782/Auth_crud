<?php
// session initialization
include './Process/databaseconn.php';

session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
header("location: index.php");
exit;
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty($_POST['username'])) {
        $_SESSION['message'] = 'username cannot be empty!';
        $_SESSION['msg_type'] =  'danger';
    }
    else {
        $username = $_POST['username'];
    }
    if (empty($_POST['password'])) {
        $_SESSION['message'] = 'password cannot be empty!';
        $_SESSION['msg_type'] =  'danger';
    } else {
        $password = $_POST['password'];
    }
    if(!empty($username) && !empty($password)) {
        $res = $mysqli->query("SELECT password, username FROM users WHERE username = '$username'");
        $row = $res->fetch_array();
        if(count($row) == 1) {
            $_SESSION['message'] = "login successfull";
            $_SESSION['msg_type'] = "success";
            header("locatiion: index.php");
        }
    }
}