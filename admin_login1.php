<?php

$conn=mysqli_connect('localhost','root','','ecommerce');

$admin_name = $_POST['username'];
$admin_password = $_POST['userpassword'];

$result = mysqli_query($conn, "SELECT * FROM `admin` WHERE username='$admin_name' AND  userpassword='$admin_password' ");

session_start();

if(mysqli_num_rows($result)){

    $_SESSION['admin'] = $admin_name;

    echo "
        <script>
        alert('Login Successfully');
        
         window.location.href='mystore.php';
        </script>
        ";
}
else{
    echo "
        <script>       
        alert('Invalid Username/Passsword');
        
        window.location.href='admin_login.php'; 
        </script>
        
        ";
}
?>