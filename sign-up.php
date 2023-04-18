<?php
require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ShoeWare PIMS - Sign Up</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
</head>

<body>
    <div class="form-popup" id="signup-popup">
        <h1>Sign up success!</h1>
        <p>User successfully registered!</p>
        <div class="yes-no">
        <button class="pformSubmit" onclick="closePopup()">Okay</button>
        <a class="pformSubmit" href="index.php">Go to login page</a>
        </div>
    </div>
    <div class="container">


        <div class="login-left">
            <div class="login-header">
                <h1>Product Inventory Management System</h1>
                <p>Sign Up</p>
            </div>

            <form class="login-form" action="includes\login\sign-up.inc.php" method="post">
                <div class="login-form-content">
                    <div class="form-item">
                        <label for="username">Name</label>
                        <input type="text" id="username" name="name">
                    </div>
                    <div class="form-item">
                        <label for="password">Email</label>
                        <input type="text" id="email" name="email">
                    </div>
                    <div class="form-item">
                        <label for="username">Username</label>
                        <input type="text" id="uid" name="uid">
                    </div>
                    <div class="form-item">
                        <label for="password">Password</label>
                        <input type="password" id="pwd" name="pwd">
                    </div>
                    <div class="form-item">
                        <label for="password">Re-enter Password</label>
                        <input type="password" id="pwdRepeat" name="pwdrepeat">
                    </div>
                    <button type="submit" name="submit">Sign Up</button>
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
    <script>
        function showPopup() {
            document.getElementById('signup-popup').style.display = 'block';
        }

        function closePopup() {
            document.getElementById('signup-popup').style.display = 'none';
        }
    </script>
</body>

</html>