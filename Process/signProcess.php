<?php
require_once 'databaseconn.php';
// $showAlert = false;
// $showError = false;
session_start();
$exists = false;

if($_SERVER["REQUEST_METHOD"] == "POST") {
    //include the db connection file
    include './Process/databaseconn.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = $_POST['cpassword'];
    
}