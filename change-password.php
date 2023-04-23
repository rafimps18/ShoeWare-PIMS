<?php
require 'includes/login/dbh-inc.php';
require 'includes/account-settings/get-username.php';
include_once 'navbar.php';
session_start();
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
            <div class="form-item1">
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "passwordtooshort") {
                        echo "<p class='login-error-message'>New password must be at least 10 characters long.</p>";
                    } else if ($_GET["error"] == "currentpasswordincorrect") {
                        echo "<p class='login-error-message'>Current password is incorrect.</p>";
                    }
                }
                ?>
            </div>

            <h1>Change Password</h1>
            <form
                action="./includes/account-settings/change-password.inc.php?usersId= <?php echo $_SESSION["userid"]; ?> "
                method="post" autocomplete="off">

                <div class="pformItem">
                    <label class="pformLabel" for="pwd">Enter current password</label>
                    <input class="new-username-label" name="pwd" type="password">
                </div>
                <div class="pformItem">
                    <label class="pformLabel" for="newPwd">Enter new password</label>
                    <input class="new-username-label" name="newPwd" type="password">
                </div>
                <div class="pformItem">
                    <label class="pformLabel" for="pwdRepeat">Repeat new password</label>
                    <input class="new-username-label" name="pwdRepeat" type="password">
                </div>

                <div class="yes-no">
                    <button class="pformSubmit" type="submit" name="submit">Submit</button>
                    <a class="pformSubmit" href="account-settings.php">Cancel</a>
                </div>
            </form>

        </div>
    </div>
</body>

</html>