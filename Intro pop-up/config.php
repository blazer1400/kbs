<?php
include 'dbConn.php';
if(isset($_SESSION['user_id'])){
    $userid = $_SESSION['user_id'];
} else {
    $userid = "Guest";
}
//$userid = 8;
$usedb = "USE nerdy_gadgets_start";
mysqli_query($conn, $usedb);
$columnToCheck = 'popup';
$tableName = 'user';


$checkColumnQuery = "SHOW COLUMNS FROM $tableName LIKE '$columnToCheck'";
$checkColumnResult = mysqli_query($conn, $checkColumnQuery);

if (!$checkColumnResult) {
    die("Error checking column: " . mysqli_error($conn));
}
if (mysqli_num_rows($checkColumnResult) == 0) {
    $addColumnQuery = "ALTER TABLE $tableName ADD COLUMN $columnToCheck VARCHAR(255) DEFAULT NULL";
    $addColumnResult = mysqli_query($conn, $addColumnQuery);

    if (!$addColumnResult) {
        die("Error adding column: " . mysqli_error($conn));
    }
}