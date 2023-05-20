<?php
require 'includes/login/dbh-inc.php';
require 'includes/account-settings/get-username.php';
include_once 'navbar.php';
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
            <h2>Current username:
                <?php echo $username ?>
            </h2>
            <form
                action="./includes/account-settings/change-username.inc.php?usersId= <?php echo $_SESSION["userid"]; ?> "
                method="post">
                <div class="pformItem">
                    <label class="pformLabel" for="new-username">New username</label>
                    <input class="new-username-label" value="<?php echo 'username'; ?>" name="username" type="text">
                </div>
                <div class="pformItem">
                    <label class="pformLabel" for="new-username">Enter password to change username</label>
                    <input class="new-username-label" name="pwd" type="password">
                </div>
                <div class="pformItem">
                    
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "passwordincorrect") {
                        echo "<p class='login-error-message'>Incorrect Password</p>";
                    }
                }
                ?>
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