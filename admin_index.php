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
    <div class="container">
        <button class="btn btn-primary" value="Home" style="margin-left: 180vh;"><a style="text-decoration:none; color:white;" href="index.php">Home</a></button>
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">
                <form action="admin_insert.php" method="POST" enctype="multipart/form-data">
                                                        <!-- enctype use for file uploading -->

                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-warning">Product Detail:</p>
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Product Name:-</label>
                        <input type="text" name="Pname" class="form-control" placeholder="Enter Product Name">
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Product Price:-</label>
                        <input type="text" name="Pprice" class="form-control" placeholder="Enter Product Price">
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Add Product Image:-</label>
                        <input type="file" name="Pimage" class="form-control">
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
                    <button name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Upload</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Fetch the data -->
    <div class="container">

        <div class="row">
            <div class="col-md-8 m-auto">


                <table class="table table-hover border border-warning my-5">

                    <thead class="fs-5 font-monospace text-center">
                        <th class="bg-dark text-white">Id</th>
                        <th class="bg-dark text-white">Name</th>
                        <th class="bg-dark text-white">Price</th>
                        <th class="bg-dark text-white">Image</th>
                        <th class="bg-dark text-white">Category</th>
                        <th class="bg-dark text-white">Delete</th>
                        <th class="bg-dark text-white">Update</th>
              
                    </thead>

                    <tbody class="text-center">
                        <?php
                        include 'Connection.php';
                        $sql = "SELECT * FROM `tblproduct`";
                        $Record = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_array($Record))

                            echo "
        <tr>
            <td>$row[Id]</td>
            <td>$row[PName]</td>
            <td>$row[PPrice]</td>
            <td><img src='$row[PImage]' height='90px' width='200px'></td>
            <td>$row[PCategory]</td>
            <td><a href='update.php? ID=$row[Id]' class='btn btn-warning'>Update</a></td>
            <td><a href='admin_delete.php? ID=$row[Id]' class='btn btn-danger'>Delete</a></td>
        </tr>";
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>