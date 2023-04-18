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
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="content-container">
        <div class="form-container">
            <h1>Delete account</h1>
            <p>Are you sure you want to delete your account? To continue, please enter your password:</p>
            <form action="includes/account-settings/delete-account.inc.php?usersId=<?php echo $_SESSION['userid']?>" method="POST">
                <div class="pformItem">
                    <input type="password" name="pwd">
                </div>
                <div class="yes-no">
                    <button class="pformSubmit" type="submit" name="submit">Submit</button>
                    <a class="pformSubmit" href="account-settings.php">No</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>