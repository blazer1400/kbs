<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nerdy Gadgets</title>
    <link rel="stylesheet" href="banner.css" type="text/css">
    <script type="text/javascript" src="Banner.js"></script>
    <script type="text/javascript">
    </script>
    <style>
        html,
        body {
            position: relative;
        }

        body {
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

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
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a href="search.html">
                <img src="Images/phones.jpg">
            </a>
        </div>
        <div class="swiper-slide">
            <a href="search.html">
                <img src="Images/laptops.jpg">
            </a>
        </div>
        <div class="swiper-slide">
            <a href="search.html">
                <img src="./Images/Computer.jpg">
            </a>
        </div>
        <div class="swiper-slide">
            <a href="search.html">
                <img src="Images/componenten.jpg">
            </a>
        </div>
        <div class="swiper-slide">
            <a href="search.html">
                <img src="Images/routers.jpg">
            </a>
        </div>
        <div class="swiper-slide">
            <a href="search.html">
                <img src="./Images/">
            </a>
        </div>
        <div class="swiper-slide">
            <a href="">
                <img src="./Images/">
            </a>
        </div>
        <div class="swiper-slide">
            <a href="search.html">
                <img src="./Images/">
            </a>
        </div>
        <div class="swiper-slide">
            <a href="search.html">
                <img src="./Images/">
            </a>
        </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>

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
</body>
</html>