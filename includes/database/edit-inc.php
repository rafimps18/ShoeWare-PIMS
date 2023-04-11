<?php
require 'dbconfig\config.php';
$pid = $_GET['pid'];

$pname = $_POST['pname'];
$pbrand = $_POST['pbrand'];
$pcolor = $_POST['pcolor'];
$price = $_POST['price'];
$pquantity = $_POST['pquantity'];

mysqli_query($con, "UPDATE products2 SET pname='$pname', pbrand='$pbrand', pcolor='$pcolor', price='$price', pquantity='$pquantity' WHERE pid='$pid'");
header('location:..\..\database.php');
?>