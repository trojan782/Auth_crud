<?php
$host = '127.0.0.1';
$user = 'root';
$password = '';
$dbname = 'zuri1';

//create connection
$conn = mysqli_connect($host, $user, $password, $dbname);

if($conn) {
    echo 'Database connected successfully';
}
else {
    die("Error" . mysqli_connect_error());
}