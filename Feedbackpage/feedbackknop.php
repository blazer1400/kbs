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
    <form id="feedbackForm"> <!-- Wrap the content in a form element -->
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
                <div class="star-container" id="star5">
                    <div class="star-container" id="star4">
                        <div class="star-container" id="star3">
                            <div class="star-container" id="star2">
                                <div class="star-container" id="star1">
                                    <span class="fa fa-star" onclick="addChecked1()"></span>
                                </div>
                                <span class="fa fa-star" onclick="addChecked2()"></span>
                            </div>
                            <span class="fa fa-star" onclick="addChecked3()"></span>
                        </div>
                        <span class="fa fa-star" onclick="addChecked4()"></span>
                    </div>
                    <span class="fa fa-star" onclick="addChecked5()"></span>
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
            <input type="submit" class="submit"  value="SUBMIT">
        </div>
    </form>
    <div class="thx none" id="thank">
        <h1>Thanks for the feedback!</h1>
        <button class="knop-OK" onclick="removeFeedBox()">OK</button>
    </div>
</div>
</body>
</html>