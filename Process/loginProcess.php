<?php
include("databaseconn.php");
session_start();
if (($_SERVER["REQUEST_METHOD"] == 'POST')) {
    extract($_POST);
    // include './databaseconn.php';
    $sql = mysqli_query($conn, "SELECT * FROM users where username='$username' and Password='$password'");
    $row  = mysqli_fetch_array($sql);
    if (is_array($row)) {
        // $_SESSION["ID"] = $row['ID'];
        $_SESSION["username"] = $row['username'];
        $_SESSION["password"] = $row['password'];
        // $_SESSION["Last_Name"]=$row['Last_Name']; 
        header("Location: ./dashboard/index.php");
    } else {
        echo "Invalid credentials";
    }
}
