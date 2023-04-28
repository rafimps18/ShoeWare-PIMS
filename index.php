<?php
require 'includes/login/dbh-inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ShoeWare PIMS - login</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
</head>

<body>
    <div class="container">
        <div class="login-left">
            <div class="login-header">
                <h1>Product Inventory Management System</h1>
                <p>Login</p>
            </div>

            <form class="login-form" action="includes/login/login-inc.php" method="post">
                <div class="login-form-content">
                    <div class="form-item">
                        <label for="username">Enter Username</label>
                        <input type="text" id="username" name="uid" required>
                    </div>
                    <div class="form-item">
                        <label for="password">Enter Password</label>
                        <input type="password" id="password" name="pwd" required>
                    </div>
                    <div class="form-item1">
                        <?php
                        if (isset($_GET["error"])) {
                            if ($_GET["error"] == "emptyinput") {
                                echo "<p class='login-error-message'>Enter your username and password</p>";
                            } else if ($_GET["error"] == "wronglogin") {
                                echo "<p class='login-error-message'>Incorrect login information</p>";
                            } else if ($_GET["error"] == "nouser") {
                                echo "<p class='login-error-message'>User does not exist</p>";
                            }
                        }
                        ?>
                    </div>
                    <button type="submit" name="submit">Login</button>
                </div>
            </form>

        </div>
        <div class="login-right">
            <div class="company-logo-and-name">
                <img class="company-logo" src=".\images\logo.png" alt="">
                <h1 class="company-name">ShoeWare</h1>
            </div>
        </div>
    </div>
</body>

</html>