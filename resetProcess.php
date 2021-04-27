<?php
session_start();
$id = $_SESSION["username"];/* username of the user */
$conn = mysqli_connect('127.0.0.1','root','','zuri1') or die('Unable To connect');

if(count($_POST)>0) {
$result = mysqli_query($conn,"SELECT *from users WHERE username='" . $id . "'");
$row=mysqli_fetch_array($result);
$cpassword = $_POST['cpassword'];
$newPassword = $_POST['newPassword'];
$hashedPass = password_hash($newPassword, PASSWORD_DEFAULT);

if($cpassword == password_verify($_POST['cpassword'], $row['password'])) {
   $update =  mysqli_query($conn, "UPDATE users set password= '$hashedPass' WHERE username = '$id'");
   if($update) {
       echo "Password changed successfully";
       header("location: login.php");
   }
   else {
       echo "Unfortunately, the password was not changed";
   }
}

}