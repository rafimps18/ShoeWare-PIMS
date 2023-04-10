<?php
require_once 'navbar.php';
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
        <div class="form-container">
            <div class="form-header">
                <h1 class="formh1">Product Information Form</h1>
            </div>
            <form class="product-information-form">
                <div class="information-form-content">
                    <div class="pform-item">
                        <label class="pformLabel">Product Name</label>
                        <input class="pformInput" type="text" placeholder="Enter product name" name="pname">
                    </div>
                    <div class="pform-item">
                        <label class="pformLabel">Product Brand</label>
                        <input class="pformInput" type="text" placeholder="Enter product brand" name="pbrand">
                    </div>
                    <div class="pform-item">
                        <label class="pformLabel">Color</label>
                        <input class="pformInput" type="text" placeholder="Enter color" name="pcolor">
                    </div>
                    <div class="pform-item">
                        <label class="pformLabel">Price</label>
                        <input class="pformInput" type="number" placeholder="Enter product price" name="price">

                    </div>
                    <div class="pform-item">
                        <label class="pformLabel">Product Quantity</label>
                        <input class="pformInput" type="number" placeholder="Enter product quantity" name="pquantity">
                    </div>
                    <button class="pformSubmit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>