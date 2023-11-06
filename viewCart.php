<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viewCart</title>
</head>

<body>
    <?php
    include 'header.php';

    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center bg-light mb-5 rounded">
                <h1 class="text-warning">My Cart</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-sm-12 col-md-6 col-lg-9">
                <table class="table table-bordered text-center">
                    <thead class="text-white fs-5">
                        <th class="bg-danger">Serial No.</th>
                        <th class="bg-danger">Product Name</th>
                        <th class="bg-danger">Product Price</th>
                        <th class="bg-danger">Product Quantity</th>
                        <th class="bg-danger">Total Price</th>
                        <th class="bg-danger">Update</th>
                        <th class="bg-danger">Delete</th>
                    </thead>
                    <tbody>
                       <?php
                       
                       $ptotal = 0;
                       $total=0;
                       $i=0;
                       if(isset($_SESSION['cart'])){
                        foreach($_SESSION['cart'] as $key => $value) {
                          $ptotal =  (floatval($value["productPrice"]) * floatval ($value["productQuantity"]));
                        //   $total +=  number_format(floatval($value["productPrice"]) * floatval ($value["productQuantity"]));
                        $total +=  (floatval($value["productPrice"]) * floatval ($value["productQuantity"])); $ptotal =  (floatval($value["productPrice"]) * floatval ($value["productQuantity"]));
                        $i= $key+1;
                        echo"
                        <form action='Insertcart.php' method='POST'>
                           <tr>
                           <td>$i</td>
                           <td><input type='hidden' name='PName' value='$value[productName]'>$value[productName]</td>
                           <td><input type='hidden' name='PPrice' value='$value[productPrice]'>$value[productPrice]</td>
                           <td><input type='number' name='PQuantity' value='$value[productQuantity]'></td>
                           <td>$ptotal</td>
                           <td><button name='update' class='btn btn-warning'>Update</button></td>
                           <td><button name='remove' class='btn btn-danger'>Delete</button></td>
                           <td><input type='hidden' name='item' value='$value[productName]'></td>
                           </tr>
                           </form>";
                        }
                       }
                       ?>
                    </tbody>
                    </table>

            </div>
            <div class="col-lg-3 text-center">
                <h3>Total</h3>
                <h1 class='bg-danger text-white'><?php echo number_format($total,2) ?></h1>
                <h3>Place Order</h3>
                
                         <button class='bg-danger text-white btn btn-primary' id="button">Place Order</button>
                         <script>
                        document.getElementById('button').addEventListener('click',function(){
                            alert("Successfully Your Order is Placed");
                        })
                        </script>

            </div>
        </div>
    </div>
</body>

</html>