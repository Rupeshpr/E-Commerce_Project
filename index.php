<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home-Page</title>
  <?php
  include 'header.php';
  ?>
   

</head>

<body>


  <div class="container-fluid">
    <div class="col-md-12">
      <div class="row">
      <marquee behavior="slider" direction="left" style="font-size:55px; text-shadow:1px 2px 2px red;" scrollamount="8"><b>Welcome To Our E-Shop Website!!</b></marquee>
      <marquee behavior="slider" direction="up"> <img src="emoji.png" style="margin-left: 85vh;" alt="" height="200px" width="220px"></marquee>
        
         <h1 class="text-warning font-monospace my-3 text-center">Home</h1>
        
        

        <?php
        include 'Connection.php';
        
        $sql = "select * from tblproduct";
        $Record = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($Record)) {
          $check_page = $row['PCategory'];
          if ($check_page === 'Home') {

            echo "
          <div class='col-md-6 col-lg-4 mb-3'>
          <form action='Insertcart.php' method='POST' style='margin-bottom:30px';>

  <div class='card m-auto' style='width: 18rem; height:430px';>
    <img src='$row[PImage]' class='card-img-top' style='height: 230px;' alt='...'>
    <div class='card-body text-center'>
      <h5 class='card-title text-danger fs-4 fw-bold'>$row[PName]</h5>
      <p class='card-text text-danger fs-4 fw-bold'>"; ?>RS:
            <?php echo number_format($row['PPrice'], 2) ?>
            <?php echo "</p>
      <input type='hidden' name='PName' value='$row[PName]'>
      <input type='hidden' name='PPrice' value='$row[PPrice]'>
      <input type='number' name='PQuantity' value=' min='1' max='20' ' placeholder='Quantity'><br><br>
      <input type='submit' name = 'addCart' class='btn btn-warning text-white w-100' value='Add to Cart'>
      
    </div>
  </div>
  </form>
  </div>";
          }
        }
        ?>
      </div>
    </div>
  </div>

  <?php
  include 'footer.php';
  ?>
</body>
<!-- http://localhost/phpmyadmin/index.php?route=/sql&db=ecommerce&table=tbluser&pos=0 -->
</html>