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
        <h1 class="text-warning font-monospace my-3 text-center">BAG</h1>
        <?php
        
        include 'Connection.php'; 
        $sql = "select * from tblproduct";
        $Record = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($Record)) {
          $check_page = $row['PCategory'];
          if($check_page === 'Bag'){

          echo "
          <div class='col-md-6 col-lg-4 mb-3'>
          <form action='Insertcart.php' method='POST' style='margin-bottom:30px'; width: 170px;>
  <div class='card m-auto' style='width: 18rem;'>
    <img src='$row[PImage]' class='card-img-top' style='height: 200px;' alt='...'>
    <div class='card-body text-center'>
    <h5 class='card-title text-danger fs-4 fw-bold'>$row[PName]</h5>
    <p class='card-text text-danger fs-4 fw-bold'>";?>RS:<?php echo number_format($row['PPrice'],2)?>  <?php echo"</p>
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

</html>