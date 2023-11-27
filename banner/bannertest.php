<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nerdy Gadgets</title>
    <link rel="stylesheet" href="banner.css" type="text/css">
    <link rel="stylesheet" href="swiper.css" type="text/css">
    <script type="text/javascript" src="cover.js"></script>
    <script type="text/javascript">
    </script>
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper {
            width: 100%;
            height: 400px;
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-size: 18px;
            background: #fff;
        }

        .swiper-slide img {
            max-width: 100%;
            max-height: 100%;
            width: auto;
            height: auto;
            object-fit: contain;
        }

        .product-info {
            z-index: 1000;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .product-link {
            text-decoration: none;
            color: black;
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
        }

        .product-prijs {
            position: absolute;
            bottom: 0;
            right: 0;
            margin: 40px;
            margin-right: 96px;
        }
    </style>
</head>

<body>
<!-- Swiper -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a href="../search.html" class="product-link">
                <div id="category-img">
                    <img src="images/laptops.jpg" alt="Componenten Image">
                </div>
            </a>
        </div>
        <div class="swiper-slide">
            <a href="../search.html" class="product-link">
                <div id="slidefoto">
                    <img src="images/7Mg2Ym8jWg2j.jpg" alt="Laptop Image">
                </div>
                <div class="product-info" id="item-info">
                    <h1 class="product">Laptop</h1>
                    <p class="omschrijving">Dit is een laptop iueh nuehv iheivuhf iuhevk cjh iuekvbkeb iuehivbei huehvibe To make the omschrijving appear as a block instead of a single line of text, you can set its display property to block. Additionally, you can use other styles such as margin to adjust spacing. Here's how you can modify the CSS for omschrijving:</p>
                    <h1 class="product-prijs">€500</h1>
                </div>
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
</body>

</html>