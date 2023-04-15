<?php
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
            <h1>Change username</h1>
            <h2>Old username: <?php echo $_SESSION["useruid"]?></h2>
            <div class="pformItem">
                <label class="pformLabel" for="new-username">New username</label>
                <input class="new-username-label" name="new-username" type="text">
            </div>
            <div class="yes-no">
                <a class="delete" href="#">Save</a>
                <a class="blue-btn" href="#">Cancel</a>
            </div>
        </div>
    </div>
</body>

</html>