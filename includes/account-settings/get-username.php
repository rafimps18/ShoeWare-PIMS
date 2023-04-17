<?php
session_start();
$id = $_SESSION["userid"]; // Replace with the ID value you have

// MySQL query to retrieve username based on ID value
$sql = "SELECT usersUid FROM users WHERE usersId = $id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of the first row (assuming ID is unique)
    $row = $result->fetch_assoc();
    $username = $row["usersUid"];
} else {
    echo "No user found with the given ID";
}

$conn->close();
