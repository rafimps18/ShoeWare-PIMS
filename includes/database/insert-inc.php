<?php
require '../../dbconfig/config.php';
if (isset($_POST['submit-btn'])) {
    $pname = $_POST['pname'];
    $pbrand = $_POST['pbrand'];
    $pcolor = $_POST['pcolor'];
    $price = $_POST['price'];
    $pquantity = $_POST['pquantity'];

    if (($price === -1) && ($pquantity === -1)) {
        header('location: ../../form.php?error=invalidvalues');
    }

    $query = "insert into products2 values(NULL, '$pname', '$pbrand', '$pcolor', $price ,$pquantity, CURRENT_TIMESTAMP)";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        header('location: ../../form.php?error=none');
    } else {
        echo '<script type="text/javascript">alert("Values not inserted successfully")</script>';
    }
}
?>