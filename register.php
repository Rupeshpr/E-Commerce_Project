<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
    <title>Register Page</title>
   
    <!-- Bootstrap Cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
</head>
<body style="background: linear-gradient(to right, pink,yellow,#2c5364)";>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto mt-5 bg-white shadow font-monospace border border-info">
                <p class="text-warning text-center fs-3 fw-bold my-3">User Register</p>
                <form action="insert.php" method="POST">
                    <div class="md-3">
                        <label for="firstName">FirstName:-</label>
                        <input type="text" id="firstName" name="fname" placeholder="Enter FirstName" class="form-control" required>
                        <div class="error"></div>
                    </div><br>
                    <div class="md-3">
                        <label for="lastName">LastName:-</label>
                        <input type="text" id="lastName" name="lname" placeholder="Enter LastName" class="form-control" required>
                        <div class="error"></div>
                    </div><br>
                    <div class="md-3">
                        <label for="email">Email:-</label>
                        <input type="email" id="email" name="email" placeholder="Enter Email" class="form-control" required>
                        <div class="error"></div> 
                    </div><br>
                    <div class="md-3">
                        <label for="">Number:-</label>
                        <input type="number" id="number" name="number" placeholder="Enter Mobile Number" class="form-control" required>
                        <div class="error"></div>
                    </div><br>
                    <div class="md-3 ">
                        <label for="password">Password:-</label>
                        <input type="password" id="password" name="password" placeholder="Enter Password" class="form-control" required>
                        <div class="error"></div>
                    </div><br>
                    <div class="md-3">
                        <label for="confirmPassword">Confirm-Password:-</label>
                        <input type="password" id="password2" name="cpassword" placeholder="Enter Password" class="form-control" required>
                        <div class="error"></div>
                    </div><br>
                    <div class="mb-3">
                    <button name="submit" class="w-100 bg-primary fs-4 text-white">REGISTER</button>
                    </div>
                    <div class="mb-3">
                    <button class="w-100 bg-danger fs-4 text-white"><a class="text-decoration-none text-white" href="login.php">ALREADY ACCOUNT ?</a></button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    

</body>
</html>