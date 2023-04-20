<?php
require '../login/dbh-inc.php';
$usersId = $_GET['usersId'];

$username = $_POST['username'];
$pwd = $_POST['pwd'];
$query = mysqli_query($conn, "SELECT usersPwd FROM users WHERE usersId = $usersId;");
$result = mysqli_fetch_array($query);

$checkPwd = password_verify($pwd, $result["usersPwd"]);

if ($checkPwd !== false) {
    mysqli_query($conn, "UPDATE users SET usersUid='$username' WHERE usersId='$usersId'");
    $_SESSION["useruid"] = $username;
    header('location: ..\..\account-settings.php');
} else {
    header('location: ..\..\change-username.php?error="passwordincorrect"');
}