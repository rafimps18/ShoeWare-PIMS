<?php
require 'dbconfig/config.php';
$pid = "";
$pname = "";
$pbrand = "";
$pcolor = "";
$price = "";
$pquantity = "";
$pweight = "";
include_once 'navbar.php';
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
        <div class="table-header-and-search">
            <div class="table-header">
                <h1 class="tableh1">Product Database</h1>
            </div>
            <form action="search-results.php" method="get">
                <div class="search-btn-and-input">
                    <input for="submit" type="text" name="search" id="search" placeholder="Search...">
                    <input type="submit" name="submit" value="Search" class="search-button">
                </div>
            </form>
        </div>

        <?php
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_errno();
        }
        $result = mysqli_query($con, "SELECT * FROM products2");
        echo "<div class='table'>";
        echo "<table id='products'><th>Product Id</th><th>Product Name</th><th>Brand</th><th>Color</th><th>Price</th><th>Quantity</th><th>Actions</th>";
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td>
                    <?php echo $row['pid'] ?>
                </td>
                <td>
                    <?php echo $row['pname'] ?>
                </td>
                <td>
                    <?php echo $row['pbrand'] ?>
                </td>
                <td>
                    <?php echo $row['pcolor'] ?>
                </td>
                <td>
                    <?php echo $row['price'] ?>
                </td>
                <td>
                    <?php echo $row['pquantity'] ?>
                </td>
                <td>
                    <a class="edit" href="edit.php?pid=<?php echo $row['pid']; ?>">Edit</a>
                    <a class="delete" href="includes\database\delete-inc.php?pid=<?php echo $row['pid']; ?>">Delete</a>
                </td>
            </tr>
            <?php
        }
        echo '</table>';
        echo '</div>';
        ?>
    </div>
</body>

</html>