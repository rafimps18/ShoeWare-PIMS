<?php
require '..\..\dbconfig\config.php';
$pid = $_GET['pid'];

$query = "DELETE FROM products2 WHERE pid='$pid'";
mysqli_query($con, $query);
header('location: ..\..\database.php');
?>