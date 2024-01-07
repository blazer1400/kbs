<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Popup</title>
    <link rel="stylesheet" href="popup.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="popup.js" defer></script>
</head>
<body>
<?php
include 'dbConn.php';
include 'config.php';
if(is_numeric($userid)){
    $radiosql = "SELECT popup FROM user  WHERE id = $userid";
    $radioresult = mysqli_query($conn, $radiosql);
    $yesornull = mysqli_fetch_all($radioresult, MYSQLI_ASSOC);
for($i = 0; $i < count($yesornull); $i++){
    $radio = $yesornull[$i]['popup'];
    if($radio == 'Yes'){
        } else {
        print ("<div class=\"pop-up display\" id=\"popUp\">
    <h1>Welcome to NerdyGadgets</h1>
    <p>Bij Nerdy Gadgets geloven we in de kracht van technologie en popcultuur om mensen te verbinden en hun verbeelding te prikkelen. Onze missie is om de wereld van nerdy gadgets en verzamelobjecten toegankelijk te maken voor iedereen, zowel in onze fysieke winkel als in de digitale ruimte. We streven naar het bieden van hoogwaardige producten die de passies van techliefhebbers en popcultuurfanaten stimuleren. Onze waarden omvatten innovatie, nieuwsgierigheid, authenticiteit en community. We zijn vastbesloten om een brug te slaan tussen het verleden, heden en de toekomst van technologie en popcultuur, en streven ernaar om onze klanten een buitengewone ervaring te bieden, zowel online als offline. Welkom in de wereld van Nerdy Gadgets, waar jouw passies tot leven komen!</p>
    <br>
    <p>-Nerdy Gadgets, slimme prijzen.</p>
    <form id=\"myForm\">
        <input type=\"radio\" checked id=\"radiocheck\" value=\"Yes\" style=\"display: none\" name=\"radio\">
        <label for=\"radiocheck\" style=\"display: none\"></label>
    </form>
    <button class=\"pop-weg\" onclick=\"submitFormAndClose()\">OK</button>
</div>");
        }
    }
} else {
    print ("<div class=\"pop-up display\" id=\"popUp\">
    <h1>Welcome to NerdyGadgets</h1>
    <p>Bij Nerdy Gadgets geloven we in de kracht van technologie en popcultuur om mensen te verbinden en hun verbeelding te prikkelen. Onze missie is om de wereld van nerdy gadgets en verzamelobjecten toegankelijk te maken voor iedereen, zowel in onze fysieke winkel als in de digitale ruimte. We streven naar het bieden van hoogwaardige producten die de passies van techliefhebbers en popcultuurfanaten stimuleren. Onze waarden omvatten innovatie, nieuwsgierigheid, authenticiteit en community. We zijn vastbesloten om een brug te slaan tussen het verleden, heden en de toekomst van technologie en popcultuur, en streven ernaar om onze klanten een buitengewone ervaring te bieden, zowel online als offline. Welkom in de wereld van Nerdy Gadgets, waar jouw passies tot leven komen!</p>
    <br>
    <p>-Nerdy Gadgets, slimme prijzen.</p> 
    <form id=\"myForm\">
        <input type=\"radio\" checked id=\"radiocheck\" value=\"Yes\" style=\"display: none\" name=\"radio\">
        <label for=\"radiocheck\" style=\"display: none\"></label>
    </form>
    <button class=\"pop-weg\" onclick=\"submitFormAndClose()\">OK</button>
</div>");
}

?>


<script>
    function submitFormAndClose() {
        $.ajax({
            type: "POST",
            url: "process_popup.php", // Replace with your server-side script
            data: $("#myForm").serialize(),
            success: function(response) {
                console.log(response);
                alert("Welcome to NerdyGadgets");
                $("#popUp").removeClass("display");
            },
            error: function(error) {
                console.error(error);
                alert("An error occurred while submitting the form");
            }
        });
    }
</script>
</body>
</html>