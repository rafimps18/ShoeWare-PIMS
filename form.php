<?php
require 'dbconfig/config.php';
$pname = "";
$pbrand = "";
$pcolor = "";
$price = "";
$pquantity = "";
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
            <form class="product-information-form" action="form.php" method="post">
                <div class="information-form-content">
                    <div class="pform-item">
                        <label class="pformLabel" for="pname">Product Name</label>
                        <input class="pformInput" type="text" placeholder="Enter product name" name="pname">
                    </div>
                    <div class="pform-item">
                        <label class="pformLabel" for="pbrand">Product Brand</label>
                        <input class="pformInput" type="text" placeholder="Enter product brand" name="pbrand">
                    </div>
                    <div class="pform-item">
                        <label class="pformLabel" for="pcolor">Color</label>
                        <input class="pformInput" type="text" placeholder="Enter color" name="pcolor">
                    </div>
                    <div class="pform-item">
                        <label class="pformLabel" for="price">Price</label>
                        <input class="pformInput" type="number" placeholder="Enter product price" name="price">

                    </div>
                    <div class="pform-item">
                        <label class="pformLabel" for="pquantity">Product Quantity</label>
                        <input class="pformInput" type="number" placeholder="Enter product quantity" name="pquantity">
                    </div>
                    <button class="pformSubmit" type="submit" name="submit-btn">Submit</button>
                </div>
            </form>
            <?php
            if (isset($_POST['submit-btn'])) {
                $pname = $_POST['pname'];
                $pbrand = $_POST['pbrand'];
                $pcolor = $_POST['pcolor'];
                $price = $_POST['price'];
                $pquantity = $_POST['pquantity'];

                $query = "insert into products2 values(NULL, '$pname', '$pbrand', '$pcolor', $price ,$pquantity)";
                $query_run = mysqli_query($con, $query);

                if ($query_run) {
                    echo '
                            <script type="text/javascript">
                                function hideMsg()
                                {
                                document.getElementById("popup").style.visibility = "hidden";
                                }
                            
                                document.getElementById("popup").style.visibility = "visible";
                                window.setTimeout("hideMsg()", 2000);
                            </script>';
                } else {
                    echo '<script type="text/javascript">alert("Values not inserted successfully")</script>';
                }
            }
            ?>
        </div>
    </div>
</body>

</html>