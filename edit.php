<?php
require '.\dbconfig\config.php';
$pid = $_GET['pid'];
$query = mysqli_query($con, "SELECT * FROM products2 WHERE pid='$pid'");
$row = mysqli_fetch_array($query);
include_once 'navbar.php';
?>

<body>
    <div class="content-container">
        <div class="form-container">
            <div class="form-header">
                <h1 class="formh1">Edit
                    <?php echo $row['pname'] ?>
                    <?php echo $row['pbrand'] ?>
                </h1>
            </div>

            <form class="product-information-form" method="POST"
                action="./includes/database/update-inc.php?pid=<?php echo $pid; ?>">
                <div class="information-form-content">
                    <div class="pform-item">
                        <label class="pformLabel" for="pname">Product Name</label>
                        <input class="pformInput" type="text" value="<?php echo $row['pname']; ?>" name="pname">
                    </div>
                    <div class="pform-item">
                        <label class="pformLabel" for="pbrand">Product Brand:</label>
                        <input class="pformInput" type="text" value="<?php echo $row['pbrand']; ?>" name="pbrand">
                    </div>
                    <div class="pform-item">
                        <label class="pformLabel" for="pcolor">Product Color</label>
                        <input class="pformInput" type="text" value="<?php echo $row['pcolor']; ?>" name="pcolor">
                    </div>
                    <div class="pform-item">
                        <label class="pformLabel" for="price">Product Price:</label>
                        <input class="pformInput" type="text" value="<?php echo $row['price']; ?>" name="price">
                    </div>
                    <div class="pform-item">
                        <label class="pformLabel" for="pquantity">Product Quantity</label>

                        <input class="pformInput" type="text" value="<?php echo $row['pquantity']; ?>" name="pquantity">

                    </div>

                    <center>
                        <button class="editFormSubmit" type="submit" name="submit">Submit</button>
                        <a class="back" href="database.php">Back</a>
                    </center>
                </div>
            </form>
        </div>
    </div>
</body>

</html>