<?php
include("databaseconn.php");
session_start();
if (($_SERVER["REQUEST_METHOD"] == 'POST')) {
    extract($_POST);
    // include './databaseconn.php';
    $sql = mysqli_query($conn, "SELECT * FROM users where username='$username' and Password='$password'");
    $row  = mysqli_fetch_array($sql);
    if (is_array($row)) {
        if( ($_SESSION["username"] = $row['username']) && ( $_SESSION["password"] = $row['password'])) {
            $_SESSION['message'] ="Welcome" . $_SESSION["username"];
            header("Location: ./dashboard/index.php");
        }
        elseif ($_SESSION["password"] != $row["password"]) {
            $_SESSION['message'] = "Wrong  password, please try again!";
            $_SESSION['msg_type'] = 'danger';
        }
        elseif($_SESSION["username"] != $row["username"] || $_SESSION["password"] != $row["password"]) {
            $_SESSION['message'] = "Wrong details, please try again!";
            $_SESSION['msg_type'] = 'danger';
        }
    }
   
    // else {
    //     // echo "Invalid credentials";
    //     $_SESSION['message'] = "invalid details";
    //     $_SESSION['msg_type'] = 'danger';
    // }
}
