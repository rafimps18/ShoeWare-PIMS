<?php
require '../login/dbh-inc.php';
$usersId = $_GET['usersId'];

$username = $_POST['username'];

mysqli_query($conn, "UPDATE users SET usersUid='$username' WHERE usersId='$usersId'");
$_SESSION["useruid"] = $username;
header('location: ..\..\account-settings.php');
?>