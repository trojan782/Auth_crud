<?php

extract($_POST);
include("databaseconn.php");

if(($_SERVER["REQUEST_METHOD"] == 'POST'))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $sql=mysqli_query($conn,"SELECT * FROM users where username='$username'");
    if(mysqli_num_rows($sql)>0)
    {
        echo "This username is already taken";
        header("location: signup.php");
        exit;
    }
    if (mysqli_num_rows($sql) == 0) {
        if (($password == $cpassword)) {
            $hashedPass = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$hashedPass')";
            $sql = mysqli_query($conn, $query) or die("Could Not Perform the Query");
            if ($sql) {
                $_SESSION['message'] = "You have successfully been registered!";
                $_SESSION['msg_type'] = "success";
                header("location: login.php");
            } else {
                $_SESSION['message'] = "There was a problem registering you!";
                $_SESSION['msg_type'] = "danger";
                header("location: signup.php");
            }
        }
    }
   
//     if(move_uploaded_file($file_loc,$folder.$final_file))
//     {
//         $query="INSERT INTO register(First_Name, Last_Name, Email, Password, File ) VALUES ('$first_name', '$last_name', '$email', 'md5($pass)', '$final_file')";
//         $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
//         header ("Location: login.php?status=success");
//     }
//     else 
//     {
// 		echo "Error.Please try again";
// 	}
// }
}
