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
                <h1 class="tableh1">Product Catalog</h1>
            </div>
            <form action="search-results.php" method="get">
                <div class="search-btn-and-input">
                    <input for="submit" type="text" name="search" id="search" placeholder="Search...">
                    <input type="submit" name="submit" value="Search" class="search-button">
                </div>
            </form>
            <form method="get" action="database.php">
                <label for="sort">Sort by:</label>
                <select name="sort" id="sort">
                    <option value="">--Select--</option>
                    <option value="alphabetical">Alphabetical</option>
                    <option value="chronological">Chronological</option>
                    <option value="price">Price</option>
                </select>
                <button type="submit">Sort</button>
            </form>
        </div>

        <?php

        // Get sorting method from URL query string
        $sort = isset($_GET['sort']) ? $_GET['sort'] : '';

        // Generate SQL query based on sorting method
        switch ($sort) {
            case 'alphabetical':
                $sql = "SELECT * FROM products2 ORDER BY pname ASC";
                break;
            case 'chronological':
                $sql = "SELECT * FROM products2 ORDER BY dateAdded ASC";
                break;
            case 'price':
                $sql = "SELECT * FROM products2 ORDER BY price DESC";
                break;
            default:
                $sql = "SELECT * FROM products2";
        }

        // Execute SQL query and generate HTML table
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            echo "<div class='table'>";
            echo "<table id='products'><th>Product Id</th><th>Product Name</th><th>Brand</th><th>Color</th><th>Price</th><th>Quantity</th><th>Date Added</th><th>Actions</th>";
            while ($row = $result->fetch_assoc()) {
                echo '<tr><td>' . $row["pid"] . '</td><td>' . $row["pname"] . '</td><td>' . $row["pbrand"] . '</td><td>' . $row["pcolor"] . '</td><td>' . $row["price"] . '</td><td>' . $row["pquantity"] . '</td><td>' . $row["dateAdded"] . '</td><td class="actions-cell"><div class="actions-cell"><a class="edit" href="edit.php?pid=' . $row["pid"] . '">Update</a>
                <a class="delete" onclick="confirmDelete('.$row["pid"].', \'' . $row["pname"] . '\')">Delete</a>
                </div></td></tr>';
            }
            echo "</table>";
        } else {
            echo "0 results";
        }

        // Close database connection
        $con->close();
        ?>
    </div>
    <script>
        function confirmDelete(pid, pname) {
            // Display the confirmation dialog with delete and cancel buttons
            if (confirm("Are you sure you want to delete " + pname + "?")) {
                // If delete button is clicked, execute the delete query
                window.location.href = "includes/database/delete-inc.php?pid=" + pid; // Replace with your PHP file and query
            } else {
                // If cancel button is clicked, do nothing
            }
        }
    </script>
</body>

</html>