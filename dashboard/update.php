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
        <form action="handler.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name" value="<?php echo $name; ?>">
            </div>

            <div class="form-group">
                <label for="location">Course</label>
                <input type="text" class="form-control" name="location" placeholder="Enter the new course" value="<?php echo $course; ?>">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-info form-control" name="update">Update</button>
            </div>
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