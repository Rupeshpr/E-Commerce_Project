<!DOCTYPE html>
<html lang="en">
<!-- Creating Index Page (Dashboard)-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<!-- Alt shift f to format document -->

<body>
<?php
$id=$_GET['ID'];
include 'Connection.php';
$sql="SELECT * FROM `tblproduct` WHERE Id = '$id'";
$Record = mysqli_query($conn,$sql);
$data = mysqli_fetch_array($Record);
?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">
                <form action="update.php" method="POST" enctype="multipart/form-data">
                                                        <!-- enctype use for file uploading -->

                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-warning">Product Update:</p>
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Product Name:-</label>
                        <input type="text" value="<?php echo $data['PName'] ?>" name="Pname" class="form-control" placeholder="Enter Product Name">
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Product Price:-</label>
                        <input type="text" value="<?php echo $data['PPrice'] ?>" name="Pprice" class="form-control" placeholder="Enter Product Price">
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Add Product Image:-</label>
                        <input type="file" name="Pimage" class="form-control">
                        <img src="<?php echo $data['PImage'] ?>" style="height:100px" alt="">
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Select Page Category:-</label>
                        <select class="form-select" name="Pages">
                            <option value="Home">Home</option>
                            <option value="Laptop">Laptop</option>
                            <option value="Bag">Bag</option>
                            <option value="Mobile">Mobile</option>
                        </select>
                    </div>
                        <input type="hidden" name="id" value="<?php echo $data['Id'] ?>">
                    <button name="update" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Update</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Updation -->
    <?php
        if(isset($_POST['update'])){
            $id = $_POST['id'];
            $product_name = $_POST['Pname'];
            $product_price = $_POST['Pprice'];
            $product_image = $_FILES['Pimage'];
            $image_loc = $_FILES['Pimage']['tmp_name'];
            $image_name = $_FILES['Pimage']['name'];
        
            $img_des = "Upload_image/" . $image_name;
            //upload_image is a folder name
            move_uploaded_file($image_loc, "Upload_image/" . $image_name);
        
            $product_category = $_POST['Pages'];

            include  'Connection.php';
            
            $sql3="UPDATE `tblproduct` SET `PName`='$product_name',`PPrice`='$product_price',`PImage`='$img_des',`PCategory`='$product_category' WHERE Id=$id";
            mysqli_query($conn,$sql3);

            header("location: admin_index.php");
        }
    ?>
    
</body>

</html>