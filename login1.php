<?php
$name=$_POST['fname'];
$Password=$_POST['password'];

$conn = mysqli_connect('localhost','root','','ecommerce');

$sql="SELECT * FROM `tbluser` WHERE (first_name = '$name' OR email='$name') AND password='$Password'";
$result = mysqli_query($conn,$sql);
session_start();
if(mysqli_num_rows($result)){
    $_SESSION['user'] = $name;
             //variable
    //session create
    echo"
        <script>
        alert('Successfully Login');
        window.location.href='index.php';
        </script>";
    }
    // window.location.href='../index.php';
else{
    echo"
        <script>
        alert('Incorrect E-mail/Username/Password');
        window.location.href='login.php';
        </script>";
}
?>