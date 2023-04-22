<?php
require 'includes/login/dbh-inc.php';
require 'includes/account-settings/get-username.php';
require_once 'navbar.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="content-container">
        <div class="account-settings-container">

            <h1>Account Settings</h1>
            <h2>Account Name:
                <?php echo $username; ?>
            </h2>
            <a href="includes\login\logout-inc.php">Sign out</a>
            <a href="change-username.php">Change Username</a>
            <a href="change-password.php">Change Password</a>
            <a href="delete-account.php">Delete Account</a>
        </div>
    </div>
</body>

</html>