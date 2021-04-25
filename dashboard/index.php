<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrow</title>
    <link rel="stylesheet" href="bootstrap-5.0.0-alpha1-dist/css/bootstrap.min.css">
    <!--Bootstrap css file -->
    <link rel="stylesheet" href="bootstrap-5.0.0-alpha1-dist/css/bootstrap.css">
    <!--Bootstrap css file-->
    <link rel="stylesheet" href="style.css">
    <!--local stylesheet -->
</head>

<body>
    <!-- Your code goes in here -->
    <?php require_once 'handler.php' ?>
    <?php if (isset($_SESSION['message'])) : ?>

        <div class="alert alert-<?= $_SESSION['msg_type'] ?>">

            <?php echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>
        </div>
    <?php endif; ?>

    <div class="row justify-content-center">
        <h1>Course Tracker✍🏽</h1>
        <form action="handler.php" method="POST">
            <div class="form-group">
                <label for="firstname">Firstname</label>
                <input type="text" name="firstname" class="form-control" placeholder="Enter your firstname" required>
            </div>

            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" name="lastname" class="form-control" placeholder="Enter your lastname">
            </div>

            <div class="form-group">
                <label for="item">Item</label>
                <input type="text" name="item" class="form-control" placeholder="Enter the item" required>
            </div>

            <div class="form-group">
                <label for="firstname">Date</label>
                <input type="date" name="date" class="form-control" required>
            </div>
            <a href="table.php" class="btn btn-danger">See table</a>
            <button class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>




    <!--local script file-->
    <script src="bootstrap-5.0.0-alpha1-dist/js/bootstrap.min.js"></script>
    <!--Bootstrap js file -->
    <script src="bootstrap-5.0.0-alpha1-dist/js/bootstrap.js"></script>
    <!--Bootstrap js file -->
</body>

</html>