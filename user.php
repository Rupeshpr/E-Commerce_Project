<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Userpage</title>
    <!-- Bootstrap Cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body>
    <?php
    include 'mystore.php';
    include 'Connection.php';
    $sql="SELECT * FROM `tbluser`";
    $Record = mysqli_query($conn,$sql);
    $row_count= mysqli_num_rows($Record);
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-10">

    <table class="table table-secondary table-border">
        <thead class="text-center">
            <th>S.No</th>
            <th>First_Name</th>
            <th>Last_Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Delete</th>

            
        </thead>
        <?php
        $i=0;
        ?>
        <tbody class="text-center  ">
            <?php
                while($row=mysqli_fetch_array($Record)){
                  echo"
                    <tr>
                <td class='text-danger'> ";?><?php echo ++$i; ?> <?php echo "</td>
                <td class='text-danger'>$row[first_name]</td>
                <td class='text-danger'>$row[last_name]</td>
                <td class='text-danger'>$row[email]</td>
                <td class='text-danger'>$row[number]</td>
                <td ><a href='delete.php? id=$row[id]' class='btn btn-outline-danger' >Delete</a></td>
            </tr>";
                }
            ?>
        </tbody>
            <div class="col-md-2 text-center">
                <h3 class="text-danger">Total  Users</h3>
                <h1 class="bg-danger text-white"><?php echo $row_count; ?></h1>
            </div>
            </div>
    </div>
    </table>
    </div>
</body>
</html>