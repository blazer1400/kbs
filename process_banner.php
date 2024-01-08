<?php
//process_banner.php
include 'dbConnction.php';
include 'conf.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $radiocheck = $_POST['easter'];

    if(is_numeric($userid)){
        if(isset($_POST['easter'])){
            $newrow = "UPDATE user
SET easter = 'Yes'
WHERE id = $userid";
            mysqli_query($conn, $newrow);
        }
    }
    error_log("Form data: " . print_r($_POST, true));
    exit;
}