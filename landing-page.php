<!DOCTYPE html>
<html>

<head>
    <title>Landing Page</title>
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 40px;
        }

        .logo {
            margin-right: 20px;
        }

        .company-name {
            font-size: 24px;
            font-weight: bold;
        }

        .button-container {
            display: flex;
            align-items: center;
            margin-top: 40px;
        }

        .button {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 0 20px;
            background-color: #007bff;
            color: #fff;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
            transform: scale(1.03);
        }
    </style>
</head>

<body>
    <div class="content-container">
        <div class="logo-container">
            <div class="logo">
                <img src="images/logo.png" alt="Logo" width="100">
            </div>
            <div class="company-name">
                Shoeware
            </div>
        </div>
        <div class="button-container">
            <a href="form.php" class="button">Inventory Form</a>
            <a href="database.php" class="button">Product Catalog</a>
            <a href="account-settings.php" class="button">Account Settings</a>
        </div>
    </div>

</body>

</html>