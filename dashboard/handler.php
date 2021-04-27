<?php
$mysqli = new mysqli('127.0.0.1', 'root', '', 'zuri1') or die($mysqli->error);
// global $mysqli;
// require_once "../Process/databaseconn.php";
session_start();
$update = false;
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

    $mysqli->query("DELETE FROM courses WHERE id=$id") or die($mysqli->error);

    $_SESSION['message'] = "Course has been deleted!";
    $_SESSION['msg_type'] = 'danger';

    header("location: table.php");
}

// if(isset($_GET['edit'])) {
//     $id = $_GET['edit'];
//     $update = true;
//     $result = $mysqli->query("SELECT * FROM courses WHERE id=$id") or die($mysqli->error);
//     if(count($result) == 1) {
//         $row = $result->fetch_array();
//         $name = $row['name'];
//         $course = $row['course'];
//         $date = $_row['date'];

//     }
// }
// if (isset($_POST['update'])) {
//     $id = $_POST['id'];
//     $name = $_POST['name'];
//     $course = $_POST['course'];
//     $date = $_POST['date'];
//     $mysqli->query("UPDATE courses SET name='$name', course='$course' WHERE id=$id") or die($mysqli->error);
//     $_SESSION['message'] = "Record has been updated!";
//     $_SESSION['msg_type'] = "warning";

//     header("location: index.php");
// }
function update_get()
{
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        global $mysqli;
        $id = $_GET['id'];
        $get_id = mysqli_query($mysqli, "SELECT * FROM courses WHERE id='$id'");

        if (mysqli_num_rows($get_id) === 1) {
            $row = mysqli_fetch_assoc($get_id);
            return ($row);
            echo $row;
        }
    }
}

if (isset($_POST['name']) && isset($_POST['course'])) {
//     //check if items are empty
    if (!empty($_POST['name']) && !empty($_POST['course'])) {
        $title = mysqli_real_escape_string($conn, htmlspecialchars($_POST['name']));
        $content = mysqli_real_escape_string($conn, htmlspecialchars($_POST['course']));

        $id = $_GET['id'];
        $update_query = mysqli_query($conn, "UPDATE courses SET name='$name',course='$course' WHERE id='$id'");
        if ($update_query) {
            echo "<script>alert('Data Updated');window.location.href = 'index.php'</script>";
            exit;
        } else {
            echo "<script>alert('Data Not Inserted');window.location.href = 'update.php'</script>";
        }
    } else {
        echo '<h1>Please fill in all fields!</h1>';
    }
}

