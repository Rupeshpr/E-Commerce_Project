<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <!-- Bootstrap Cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>

<body>
    <?php
    session_start();
    $count = 0;
        if(isset($_SESSION['cart'])){
            $count = count($_SESSION['cart']);
        }
    ?>
    <nav class="navbar bg-dark">
        <div class="container-fluid font-monospace">
            <a class="navbar-brand pb-2"><img src="logo1.png" alt="" height="50px"> <b class="text-white fs-4">E-Shop</b></a>
        
        <div class="d-flex">
          <a href="index.php"class="text-warning text-decoration-none pe-2"><i class="fa-solid fa-house"></i>Home |</a>
          <a href="viewCart.php"class="text-warning text-decoration-none pe-2"><i class="fa-solid fa-cart-shopping"></i></i>Cart(<?php echo $count ?>) |</a>

          <span class="text-warning pe-2">
          <i class="fa-solid fa-user"></i>Hello,
          <?php
          //if you are loggedin then show logout
          if(isset($_SESSION['user'])){
              echo $_SESSION['user']; 
              echo"
             | <a href='logout.php'class='text-warning text-decoration-none pe-2'><i class='fa-solid fa-right-to-bracket'></i>Logout</a>";
            
          }
          else{
            echo"
           | <a href='login.php'class='text-warning text-decoration-none pe-2'><i class='fa-solid fa-right-to-bracket'></i>Login </a>";
        
          }
          ?> 
          
        <a href="mystore.php" class="text-warning text-decoration-none pe-2">Admin</a>
         
        </span>
        </div>
  
    </nav>
    </div>

    <div class="bg-danger sticky-top font-monospace">
        <ul class="list-unstyled d-flex justify-content-center">
            <li><a href="Laptop.php" class="text-decoration-none text-white fw-bold fs-4 px-5">LAPTOPS</a></li>
            <li><a href="Mobile.php" class="text-decoration-none text-white fw-bold fs-4 px-5">MOBILES</a></li>
            <li><a href="Bag.php" class="text-decoration-none text-white fw-bold fs-4 px-5">BAGS</a></li>
        </ul>
    </div>
</body>

</html>