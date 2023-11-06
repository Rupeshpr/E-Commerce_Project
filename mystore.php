<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Home Page</title>
  <!-- Bootstrap Cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- Font Awesome Cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<!-- session use -->
<?php
session_start();
if (!$_SESSION['admin']) {
  header("location:admin_login.php");
}
?>

<body>

  <div class="container-fluid">
    <nav class="navbar navbar-light bg-dark">
      <div class="container-fluid text-white">
        <a class="navbar-brand text-white">
          <h1>E-Shop</h1>
        </a>
        <span>
          <i class="fa-solid fa-user-shield"></i>
          Hello,
          <?php echo $_SESSION['admin']; ?>

          <i class="fa-solid fa-right-from-bracket"></i>

          | <a href="admin_logout.php" class="text-decoration-none text-white">Logout </a>
          
        </span>
      </div>
    </nav>


    <div>
      <h2 class="text-center">Dashboard</h2>
    </div>

    <div class="col-md-6 bg-danger text-center m-auto">
      <a href="admin_index.php " class="text-white text-decoration-none fs-4 fw-bold px-5">Add Post</a>
        
      <a href="user.php" class="text-white text-decoration-none fs-4 fw-bold px-5">Users</a>
    </div>
  </div>
</body>

</html>