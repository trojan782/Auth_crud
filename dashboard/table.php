<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrow</title>
    <!-- <link rel="stylesheet" href="bootstrap-5.0.0-alpha1-dist/css/bootstrap.min.css"> -->
    <!--Bootstrap css file -->
    <!-- <link rel="stylesheet" href="bootstrap-5.0.0-alpha1-dist/css/bootstrap.css"> -->
    <!--Bootstrap css file-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <!--local stylesheet -->
</head>

<body>
    <!-- Your code goes in here -->

    <?php require_once './handler.php'
    ?>

    <?php if (isset($_SESSION['message'])) : ?>

        <div class="alert alert-<?= $_SESSION['msg_type'] ?>">

            <?php echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>
        </div>
    <?php endif; ?>

    <?php
    $mysqli = new mysqli('127.0.0.1', 'root', '', 'zuri1') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM courses, users") or die($mysqli->error);
    // pre_r($result);
    ?>
    <div class="row justify-content-center container">
        <table class="table">
            <thead>
                <th>Instructors Name</th>
                <th>Created by</th>
                <th>Course</th>
                <th>Date</th>
                <th colspan="2">Action</th>
            </thead>

            <?php
            while ($row = $result->fetch_assoc()) :
            ?>
                <tr>
                    <td><?php echo $row['name'];
                        ?></td>
                    <td><?php echo $row['username'];
                        ?></td>
                    <td><?php echo $row['course'];
                        ?></td>
                    <td><?php echo $row['date'];
                        ?></td>

                    <td>
                        <a href="./update.php" <?php echo $row['id']; ?>" class="btn btn-info">
                            Edit
                        </a>
                        <a href="handler.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endwhile;
            ?>

        </table>
    </div>


    <a href="index.php" class="btn btn-success container">Go back</a>

    <!--local script file-->
    <!-- <script src="bootstrap-5.0.0-alpha1-dist/js/bootstrap.min.js"></script> -->
    <!--Bootstrap js file -->
    <!-- <script src="bootstrap-5.0.0-alpha1-dist/js/bootstrap.js"></script> -->
    <!--Bootstrap js file -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>