<body>
<form>
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
    <input type="text" class="input" name="beoordeling" required>
    <input type="submit" class="submit"  value="SUBMIT">
</form>

</body>
<?php

$feedbacktype = isset($_POST['feedType']);
$feedBack = isset($_POST['beoordeling']);
print($feedbacktype);
print($feedBack);
