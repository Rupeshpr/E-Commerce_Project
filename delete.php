<?php
echo $id = $_GET['id'];
include 'Connection.php';
    $sql="DELETE FROM `tbluser` WHERE id=$id";
    mysqli_query($conn,$sql);
    header("location:user.php");

?>