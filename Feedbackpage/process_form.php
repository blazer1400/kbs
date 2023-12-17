
<?php
include 'dbConnction.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Process the form data
    $rating = $_POST["rating"];
    $feedback = $_POST["beoordeling"];
    if (isset($_POST["feedType"])) {
        $feedType = $_POST["feedType"];
        if ($feedType == 'feedFout'){
            $typefeed = 'Foutmelding';
        } elseif ($feedType == 'feedComp'){
            $typefeed = 'Compliment';
        } elseif ($feedType == 'feedSuggest'){
            $typefeed = "Suggestie";
        }
    }
    // Insert the data into the database or perform other processing

    if (isset($_POST["beoordeling"]) && isset($_POST["rating"]) && isset($_POST["feedType"])){
        $newrow = "INSERT into site_feedback(rating, type, feedback)
VALUES ($rating, \"$typefeed\", \"$feedback\")";
        mysqli_query($conn, $newrow);
    }
    // For example, you can use MySQLi or PDO to interact with your database

    // Send a response back to the client

    $response = ["status" => "success", "message" => "Thanks for the feedback"];
    echo json_encode($response);
    error_log("Form data: " . print_r($_POST, true));
    exit;
}


