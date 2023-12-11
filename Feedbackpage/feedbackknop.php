<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feedbackknop</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="feedbackknop.css">
  <link rel="stylesheet" href="feedbackscreen.css">
  <style>

  </style>
  <script src="feedback.js" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
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
                <div class="star-container" id="star1">
                    <input type="radio" id="ster1" name="rating" value="1">
                    <label for="ster1" class="fa fa-star"></label>
                </div>
                <div class="star-container" id="star2">
                    <input type="radio" id="ster2" name="rating" value="2">
                    <label for="ster2" class="fa fa-star"></label>
                </div>
                <div class="star-container" id="star3">
                    <input type="radio" id="ster3" name="rating" value="3">
                    <label for="ster3" class="fa fa-star"></label>
                </div>
                <div class="star-container" id="star4">
                    <input type="radio" id="ster4" name="rating" value="4">
                    <label for="ster4" class="fa fa-star"></label>
                </div>
                <div class="star-container" id="star5">
                    <input type="radio" id="ster5" name="rating" value="5">
                    <label for="ster5" class="fa fa-star"></label>
                </div>
            </div>
            <hr width="80%">
            <p>Wat voor feedback</p>
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
            <p>Wat valt er te verbeteren?</p>
            <input type="text" class="input" name="beoordeling" required>
            <input type="submit" class="submit" onclick="showTHX()">
        </div>
    </form>
</div>
<div class="pop-up none" id="thxMS">
    <div class="thx none" id="thank">
        <h1>Thanks for the feedback!</h1>
        <button class="knop-OK" onclick="removeFeedBox()">OK</button>
    </div>
</div>

<?php
if (isset($_POST["feedType"])) {
    $feedType = $_POST["feedType"];
    if ($feedType == 'feedFout'){
        echo 'foutmelding';
    } elseif ($feedType == 'feedComp'){
        echo 'Compliment';
    } elseif ($feedType == 'feedSuggest'){
        echo "Suggestie";
    }
}
if (isset($_POST["rating"])) {
    $rating = $_POST["rating"];
    if ($rating == '1'){
        echo '1 ster';
    } elseif ($rating == '2'){
        echo '2 sterren';
    } elseif ($rating == '3'){
        echo "3 sterren";
    } elseif ($rating == '4'){
        echo '4 sterren';
    } elseif ($rating == '5'){
        echo "5 sterren";
    }
}
if (isset($_POST["beoordeling"])) {
echo $_POST["beoordeling"];
}
?>
</body>
</html>