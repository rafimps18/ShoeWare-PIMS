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
            <form class="product-information-form" action="includes/database/insert-inc.php" method="post">
                <div class="information-form-content">
                    <div class="pform-item">
                        <label class="pformLabel" for="pname">Product Name</label>
                        <input class="pformInput" type="text" placeholder="Enter product name" name="pname" required>
                    </div>
                    <div class="pform-item">
                        <label class="pformLabel" for="pbrand">Product Brand</label>
                        <input class="pformInput" type="text" placeholder="Enter product brand" name="pbrand"
                            pattern="^[^0-9]+$" required>
                    </div>
                    <div class="pform-item">
                        <label class="pformLabel" for="pcolor">Color</label>
                        <input class="pformInput" id="shoe-color" type="text" placeholder="Enter color" name="pcolor"
                            pattern="^[^0-9]+$" required>
                    </div>
                    <div class="pform-item">
                        <label class="pformLabel" for="price">Price</label>
                        <input class="pformInput" type="number" placeholder="Enter product price" name="price" required>

                    </div>
                    <div class="pform-item">
                        <label class="pformLabel" for="pquantity">Product Quantity</label>
                        <input class="pformInput" type="number" placeholder="Enter product quantity" name="pquantity"
                            required>
                    </div>
                    <button class="pformSubmit" type="submit" name="submit-btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "none") {
            echo '<div class="form-popup" id="popup">
                    <h1>Success!</h1>
                    <p>Product information inserted successfully!</p>
                  </div>';
        }
    }
    ?>
    <script>
        const shoeColorInput = document.getElementById('shoe-color');
        shoeColorInput.addEventListener('input', function (event) {
            const inputText = event.target.value;
            const nonNumericText = inputText.replace(/[0-9]/g, '');
            if (inputText !== nonNumericText) {
                event.target.value = nonNumericText;
            }
        });
        function hideMsg() {
            document.getElementById("popup").style.visibility = "hidden";
        }

        document.getElementById("popup").style.visibility = "visible";
        window.setTimeout("hideMsg()", 2500);
    </script>
</body>

</html>