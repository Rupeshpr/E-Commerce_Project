<?php
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $conn = mysqli_connect('localhost','root','','ecommerce');
   

    $sql1="SELECT * FROM `tbluser` WHERE email='$email'";
    $dup_email = mysqli_query($conn,$sql1);

    $sql2="SELECT * FROM `tbluser` WHERE first_name='$fname'";
    $dup_name = mysqli_query($conn,$sql2);

    if(mysqli_num_rows($dup_email)){
        echo"
        <script>
        alert('This email is already taken');
        window.location.href='register.php';
        </script>";
    }
    if(mysqli_num_rows($dup_name)){
        echo"
        <script>
        alert('This username is already taken');
        window.location.href='register.php';
        </script>";
    }
    else{
        $sql = "INSERT INTO `tbluser`(`first_name`, `last_name`, `email`, `number`, `password`, `cpassword`) VALUES ('$fname','$lname','$email','$number','$password','$cpassword')";
        mysqli_query($conn,$sql);
        
        echo "<script>
        alert('Register Successfully');
        window.location.href='login.php';
        </script>";
    }
}


         
?>