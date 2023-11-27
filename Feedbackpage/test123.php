<?php
include 'testfeed.php';

    $feedbackType = isset($_POST["feedbackType"]) ? $_POST["feedbackType"] : null;

    // Handle the feedbackType as needed
    if ($feedbackType !== null) {
        echo "Feedback Type: " . $feedbackType;
        // Continue with other processing or redirection
    } else {
        echo "Feedback Type is not set.";
}
    $feedBack = isset($_POST["beoordeling"]);
    print($feedBack);
    function feedbackType(){

    }
    feedbackType();
?>
