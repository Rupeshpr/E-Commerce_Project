<?php
$Id = $_GET['ID'];
include 'Connection.php';
mysqli_query($conn,"DELETE FROM `tblproduct` WHERE Id = $Id");
header("location:admin_index.php");

    
?>