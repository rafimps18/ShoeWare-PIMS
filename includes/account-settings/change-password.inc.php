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

  // Check whether new password meets criteria (e.g. is at least 10 characters long)
  if (strlen($newPwd) >= 10) {

    // Update user's password in database to new password
    $hashed_password = password_hash($newPwd, PASSWORD_DEFAULT);
    $sql = "UPDATE users SET usersPwd = '$hashed_password' WHERE usersId = '$usersId'";
    mysqli_query($conn, $sql);

    // Redirect user to success page or display success message
    header("Location: ../../account-settings.php");
    exit();

  } else {
    // Display error message to user indicating that new password is too short
    echo "New password must be at least 10 characters long.";
  }

} else {
  // Display error message to user indicating that current password is incorrect
  echo "Current password is incorrect.";
}

// Close the database connection
mysqli_close($conn);

?>