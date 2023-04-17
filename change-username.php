<?php
require 'includes/login/dbh-inc.php';
include_once 'navbar.php';
session_start();
$username = $_GET['useruid'];
$query = mysqli_query($conn, "SELECT * FROM users WHERE usersUid='$username'");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Username</title>
</head>

<body>
    <div class="content-container">
        <div class="form-container">

            <h1>Change username</h1>
            <h2>Old username: <?php echo $_SESSION["useruid"]?></h2>
            <form action="./includes/account-settings/change-username.inc.php?usersId= <?php echo $_SESSION["userid"] ; ?> " method="post">
            <div class="pformItem">
                <label class="pformLabel" for="new-username">New username</label>
                <input class="new-username-label" value="<?php echo 'username'; ?>" name="username" type="text">
            </div>
            <div class="yes-no">
                <button type="submit" name="submit" class="delete">Submit</button>
                <a class="blue-btn" href="account-settings.php">Cancel</a>
            </div>
            </form>

        </div>
    </div>
</body>

</html>