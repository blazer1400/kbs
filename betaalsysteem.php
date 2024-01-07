<!DOCTYPE html>
<html lang="en" > </html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="een betaalsysteem, initial-scale=1.0">
    <link rel="stylesheet" href="betaalsysteem.css">


    <title>betaalsysteem</title>
</head>
<body>
<?php include 'header.php';    ?>
<?php
?>
<div class="container">
    <h6>Checkout</h6>

    <form action="/">
        <label for="country">Country
            <select name="country" id="country">
                <option value="Duitsland">Duitsland</option>
                <option value="Engeland">England</option>
                <option value="Nederland">Nederland</option>

            </select>
        </label>
        <label for="cardno">Card Number
            <input type="text" name="cardno" id="cardno" maxlength="19" onkeypress="cardspace()"/>
        </label>
        <div class="float">
            <label for="validtill">Valid till
                <input type="text" name="validtill" id="validtill" maxlength="7" onkeypress="addSlashes()"/>
            </label>
            <label for="cvv">Cvv
                <input type="text" name="cvv" id="cvv" maxlength="3"/>
            </label></div>
        </label>
        <div class="sale">Korting
            <input type="text" name="sale" id="sale" maxlength="19" onkeypress="cardspace()"/>
            </label></div>
        <label for="checkbox">
            <input type="checkbox" name="checkbox" id="checkbox"/>
            <p>Payment Address is the same as the Delivery Address</p></label>
        <button>Pay 00.00 $</button>
    </form>
</div> <script src="betaalsysteem.js"></script>
</body>
</html>