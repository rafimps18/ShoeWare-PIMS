<?php
require '../login/dbh-inc.php';
$usersId = $_GET['usersId'];

$pwd = $_POST['pwd'];
$query = mysqli_query($conn, "SELECT usersPwd FROM users WHERE usersId = $usersId;");
$userpwd = mysqli_fetch_array($query);

$checkPwd = password_verify($pwd, $userpwd["usersPwd"]);

if ($checkPwd !== false) {
    mysqli_query($conn, "DELETE FROM users WHERE usersId = $usersId;");
    header('location: ..\..\index.php');
} else {
    header('location: ..\..\delete-account.php?error="passwordincorrect"');
}