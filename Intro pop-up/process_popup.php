<?php
include 'dbConn.php';
include 'config.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $radiocheck = $_POST['radio'];

if(is_numeric($userid)){
    if(isset($_POST['radio'])){
        $newrow = "UPDATE user
SET popup = 'Yes'
WHERE id = $userid;";
        mysqli_query($conn, $newrow);
    }
}
    $response = ["status" => "success", "message" => "Welcome to NerdyGadgets"];
    echo json_encode($response);
    error_log("Form data: " . print_r($_POST, true));
    exit;
}

