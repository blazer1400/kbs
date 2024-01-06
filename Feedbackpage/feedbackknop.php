<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feedbackknop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="feedbackknop.css">
    <link rel="stylesheet" href="feedbackscreen.css">
    <script src="feedback.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
<?php
include 'dbConnction.php';
$dbselectie = "USE nerdy_gadgets_start;";
mysqli_query($conn, $dbselectie);
$createtable = "CREATE TABLE IF NOT EXISTS site_feedback (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    rating INT NOT NULL,
    type VARCHAR(255) NOT NULL,
    feedback VARCHAR(255)
);";
mysqli_query($conn, $createtable);
?>
<div class="container">
    <button class="sticky-button" onclick="displayFeedBox()">Feedback</button>
</div>
<div class="pop-up none" id="feedBox">
    <form id="feedbackForm" method="post"> <!-- Wrap the content in a form element -->
        <div class="feedback" id="feedBack">
            <header class="pop-header">
                <div class="header-content">
                    <div class="header-text">Feedback</div>
                    <div class="close-button" id="closeButton" onclick="removeFeedBox()">&#10006;</div>
                </div>
            </header>

            <hr width="80%">
            <p>Wat vond je van de website?</p>
            <div class="stars" id="starRating">
            <?php
            $aantalsterren = 5;
            for ($i = 1; $i <= $aantalsterren; $i++){
                print("<div class=\"star-container\" id=\"star$i\">
                    <input type=\"radio\" id=\"ster$i\" name=\"rating\" value=\"$i\" required>
                    <label for=\"ster$i\" class=\"fa fa-star\"></label>
                </div>");
            }
            ?>
            </div>
            <hr width="80%">
            <p>Wat voor feedback wil je geven?</p>
            <div class="typebuttons" id="typeButton">
                <div class="feedType">
                    <input type="radio"
                           id="feedFout"
                           name="feedType"
                           value="feedFout">
                    <label for="feedFout">Foutmelding</label>
                </div>
                <div class="feedType">
                    <input type="radio"
                           id="feedSuggest"
                           name="feedType"
                           value="feedSuggest" required>
                    <label for="feedSuggest">Suggestie</label>
                </div>
                <div class="feedType">
                    <input type="radio"
                           id="feedComp"
                           name="feedType"
                           value="feedComp">
                    <label for="feedComp">Compliment</label>
                </div>
            </div>
            <hr width="80%">
            <p>Wat is jouw feedback?</p>
            <input type="text" class="input" name="beoordeling" required>
            <button class="submit" type="button" onclick="submitForm()">Submit</button>
        </div>
    </form>
</div>
<div class="pop-up none" id="thxMS">
    <div class="thx none" id="thank">
        <h1>Thanks for the feedback!</h1>
        <button class="knop-OK" onclick="removeFeedBox()">OK</button>
    </div>
</div>


<script>
    function submitForm() {
        // Collect form data
        var formData = $("#feedbackForm").serialize();
        // Send AJAX request to process_form.php
        $.ajax({
            type: "POST",
            url: "process_form.php",
            data: formData,
            dataType: "json",
            success: function(response) {
                alert(response.message);
                console.log(response);
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error: " + status, error);
                alert("An error occurred while submitting the form");
            }
        });
        removeFeedBox();
    }
</script>
</body>
</html>