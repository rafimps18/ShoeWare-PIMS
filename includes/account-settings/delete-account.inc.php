<?php
require '../login/dbh-inc.php';
$usersId = $_GET['usersId'];

mysqli_query($conn, "DELETE FROM users WHERE usersId = $usersId;");
header('location: ..\..\index.php');