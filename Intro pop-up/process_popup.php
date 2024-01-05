<?php
include 'dbConnction.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $radiocheck = $_POST['radio'];

    $usedb = "USE nerdy_gadgets_start";
    mysqli_query($conn, $usedb);
    $newcolumn = "ALTER TABLE user
ADD COLUMN popup VARCHAR(255) DEFAULT NULL;";
    mysqli_query($conn, $newcolumn);
    if(isset($_POST['radio'])){
        $newrow = "UPDATE user
SET popup = 'Yes'
WHERE id = 1;";
        mysqli_query($conn, $newrow);
    }
    $response = ["status" => "success", "message" => "Welcome to NerdyGadgets"];
    echo json_encode($response);
    error_log("Form data: " . print_r($_POST, true));
    exit;
}

