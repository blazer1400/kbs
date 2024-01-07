<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="winkelwagen.css">
    <title> Winkelwagen </title>

</head>

<body>
<
<?php include 'header.php';    ?>
<?php
?>


<h1> Winkelwagen </h1>



<div class="container">

    <div class="products">
        <!-- Producten toevoegen -->
        <div class="product" data-id="1">
            <img src="tv.jpg" alt="Smart TV">
            <h2>Smart TV</h2>
            <p>€699.99</p>
            <button class="add-to-cart">Voeg toe aan winkelwagen</button>
        </div>

        <div class="product" data-id="2">
            <img src="laptop.jpg" alt="Laptop">
            <h2>Laptop</h2>
            <p>€999.99</p>
            <button class="add-to-cart">Voeg toe aan winkelwagen</button>
        </div>

        <div class="product" data-id="3">
            <img src="laptop.jpg" alt="Laptop">
            <h2>pc</h2>
            <p>€1999.99</p>
            <button class="add-to-cart">Voeg toe aan winkelwagen</button>
        </div>
    </div>

    <!-- betaalsysteem toevoegen -->

    <div class="cart">
        <h2>Winkelwagen</h2>
        <ul class="cart-items"></ul>
        <p class="total">Totaal: €<span id="cart-total">0.00</span></p>
        <button type="button" id="payment-button">Verder</button>


        </form>
    </div>
</div>
</div>

<script src="winkelwagen.js"></script>
</body>
</html>