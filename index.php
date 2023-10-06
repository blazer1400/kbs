<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KBS</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="./css/index-update.css"/>
</head>
<body>
<header>
    <div class="Upper-Section">
        <div class="headerContainer">
            <div class="loginButtons">
                <a href="./uitchecken">Uitchecken</a>
                <a href="./login">Login/Registratie</a>
            </div>
        </div>
    </div>
    <div class="Lower-Section">
        <img class="homepage-Logo" src="img/Logo-NerdyGadgets.png" alt="Logo">
        <div class="searchbarContainer">
            <form method="GET" action="./search.html">
                <span class="searchbar">
                    <i class="uil uil-search"></i>
                    <input name="q" type="text" />
                </span>
            </form>
        </div>
    </div>

</header>

<nav>
    <a href="./winkel">Winkel</a>
    <a href="./gadgets">Gadgets</a>
    <a href="./search.html">Sale</a>
    <a href="./klantenservice">Klantenservice</a>
</nav>

<div class="banner">
    <?php require('./banner/banner.html') ?>
</div>

<div class="products">
    <div class="productContainer">
        <div class="productImg">
            <img src="./img/products/ipad.webp" />
        </div>
        <p class="title">APPLE iPad Mini (2021) Wifi - 64 GB - Spacegrijs</p>
        <p class="price">€ 645,-</p>
    </div>

    <div class="productContainer">
        <div class="productImg">
            <img src="./img/products/jbl.jpg" />
        </div>
        <p class="title">JBL Charge 4 Zwart</p>
        <p class="price">€ 109,–</p>
    </div>

    <div class="productContainer">
        <div class="productImg">
            <img src="./img/products/lg.jpg" />
        </div>
        <p class="title">LG 65QNED916QA</p>
        <p class="price">€ 1099, –</p>
    </div>
</div>

<div class="footer">
    <div class="navigation">
        <a href="./terms-and-conditions">Algemene voorwaarden</a>
        <a href="./account">Accountgegevens</a>
        <a href="cookies">Cookie-instellingen</a>
        <a href="./privacy">Privacyverklaring</a>
    </div>
    <div class="partners">
        <div>
            <p class="title">Wij zijn partners met <span>(examples)</span></p>
            <div class="content">
                <img src="./img/partners/ideal.png" />
                <img src="./img/partners/klarna.png" />
                <img src="./img/partners/paypal.png" />
                <img src="./img/partners/visa.svg" />
            </div>
        </div>
    </div>
</div>


<div class="container">

</div>
</body>
</html>