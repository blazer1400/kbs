<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KBS</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="./css/index-update.css"/>
    <link rel="stylesheet" href="./banner/banner.css" type="text/css">
    <style>
        .swiper {
            horiz-align: right;
            width: 100%;
            height: 400px;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            max-width: 100%;
            max-height: 100%;
            width: auto;
            height: auto;
        }
    </style>
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

    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="./search.html">
                    <img src="./banner/compok.jpg">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="./search.html">
                    <img src="./banner/vrok.jpg">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="./search.html">
                    <img src="./banner/toyok.jpg">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="./search.html">
                    <img src="./banner/ARCOK.jpg">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="./search.html">
                    <img src="./banner/nerdok.jpg">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="./search.html">
                    <img src="./banner/Naamloos.jpg">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="">
                    <img src="./banner/speak.jpg">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="./search.html">
                    <img src="./banner/monitor.jpg">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="./search.html">
                    <img src="./banner/game.jpg">
                </a>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</div>

<div class="hr"></div>

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
