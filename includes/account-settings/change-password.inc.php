<?php
require '../login/dbh-inc.php';
session_start();

// Retrieve user's entered values for new password, re-entered password, and current password
$newPwd = mysqli_real_escape_string($conn, $_POST['newPwd']);
$reentered_password = mysqli_real_escape_string($conn, $_POST['pwdRepeat']);
$current_password = mysqli_real_escape_string($conn, $_POST['pwd']);

// Check whether current password matches user's actual current password
$usersId = mysqli_real_escape_string($conn, $_SESSION["userid"]);
$sql = "SELECT usersPwd FROM users WHERE usersId = '$usersId'";
$result = mysqli_query($conn, $sql);
$storedPwd = mysqli_fetch_assoc($result)['usersPwd'];

if (password_verify($current_password, $storedPwd)) {

  if (strlen($newPwd) >= 10) {

    $hashed_password = password_hash($newPwd, PASSWORD_DEFAULT);
    $sql = "UPDATE users SET usersPwd = '$hashed_password' WHERE usersId = '$usersId'";
    mysqli_query($conn, $sql);

    header("Location: ../../account-settings.php");
    exit();

  } else {
    header('location: ../../change-password.php?error=passwordtooshort');
  }

} else {
  header('location: ../../change-password.php?error=currentpasswordincorrect');
}

mysqli_close($conn);

?>