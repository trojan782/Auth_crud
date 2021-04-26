 <?php require_once '../Process/databaseconn.php'; ?>

 <!doctype html>
 <html lang="en">

 <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="../style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

     <!-- <title>Hello, world!</title> -->
 </head>


 <body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <div class="container-fluid">
             <!-- <a class="navbar-brand" href="#">Navbar</a> -->
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav">
                     <form action="post">
                         <li class="nav-item">
                             <a class="nav-link active" aria-current="page" href="../logout.php">Logout</a>
                         </li>
                     </form>
                     <?php
                        session_start();
                        // include 'Process/databaseconn.php';
                        $username = $_SESSION["username"];
                        $sql = mysqli_query($conn, "SELECT * FROM users where username='$username' ");
                        $row  = mysqli_fetch_array($sql);
                        ?>
                     <li class="nav-item">
                         <a class="nav-link active btn-btn-primary" aria-current="page" href="../reset.php">Reset Password</a>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>
     <!-- <li class="nav-item"> -->
         <h2>
             <p class="nav-link active" aria-current="page" href="#">Welcome To Your Dashboard <?php echo $row['username'] ?>!
             </p>
         </h2>
     <!-- </li> -->

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

 </body>

 </html>