<?php
$mysqli = new mysqli('127.0.0.1', 'root', '', 'zuri1') or die($mysqli->error);
// require_once "Process/databaseconn.php";
session_start();
if (isset($_POST['submit'])) {
    $name= $_POST['name'];
    $course = $_POST['course'];
    $date = $_POST['date'];

    $_SESSION['message'] = "Course has been added!";
    $_SESSION['msg_type'] = "success";

    header("location: index.php");
    //query database
    $mysqli->query("INSERT INTO courses (name, course, date) VALUES('$name', '$course', '$date')") or die($mysqli->error);
}

//to delete from the database
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error);

    $_SESSION['message'] = "Course has been deleted!";
    $_SESSION['msg_type'] = 'danger';

    header("location: table.php");
}
