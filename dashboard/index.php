<?php require_once "./handler.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <!-- <link rel="stylesheet" href="bootstrap-5.0.0-alpha1-dist/css/bootstrap.min.css"> -->
    <!--Bootstrap css file -->
    <!-- <link rel="stylesheet" href="bootstrap-5.0.0-alpha1-dist/css/bootstrap.css"> -->
    <!--Bootstrap css file-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">

    <!--local stylesheet -->
</head>

<body>
    <!-- Your code goes in here -->

    <?php if (isset($_SESSION['message'])) : ?>

        <div class="alert alert-<?= $_SESSION['msg_type'] ?>">

            <?php echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>
        </div>
    <?php endif; ?>
    <?php include "./header.php"; ?>

    <div class="row justify-content-center">
        <h2>Course Tracker✍🏽</h2>
        <form action="" method="POST">
        <input type="hidden" name = "id" value="<?php echo $id?>">
            <div class="form-group">
                <label for="firstname">Instructor Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" placeholder="Enter the instructor's name" required>
            </div>

            <div class="form-group">
                <label for="lastname">Course</label>
                <input type="text" name="course" class="form-control" value="<?php echo $course; ?>" placeholder=" Enter the name of the course">
            </div>


            <div class="form-group">
                <label for="firstname">Date</label>
                <input type="date" name="date" value="<?php echo $date; ?>" class="form-control" required>
            </div>

            <a href="table.php" class="btn btn-danger">See table</a>
           
            <?php 
            if($update == true):
            ?>
            <button class="btn btn-info" name="update">Update Course</button>
            <?php else: ?>
            <button class="btn btn-primary" name="submit">Add Course</button>
            <?php endif; ?>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!--local script file-->
    <!-- <script src="bootstrap-5.0.0-alpha1-dist/js/bootstrap.min.js"></script> -->
    <!--Bootstrap js file -->
    <!-- <script src="bootstrap-5.0.0-alpha1-dist/js/bootstrap.js"></script> -->
    <!--Bootstrap js file -->
</body>

</html>