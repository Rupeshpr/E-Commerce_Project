<?php

if (isset($_POST['submit'])) {
    include 'Connection.php';
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];
    $image_loc = $_FILES['Pimage']['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];

    $img_des = "Upload_image/" . $image_name;
    //upload_image is a folder name
    move_uploaded_file($image_loc, "Upload_image/" . $image_name);

    $product_category = $_POST['Pages'];

    //query to insert
    $sql = "INSERT INTO `tblproduct`(`PName`, `PPrice`, `PImage`, `PCategory`) VALUES ('$product_name','$product_price','$img_des','$product_category')";

    mysqli_query($conn, $sql);

    header("Location: admin_index.php");
}

?>



