<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="banner/banner.css" type="text/css">
    <script type="text/javascript" src="cover.js"></script>
    <script type="text/javascript">
    </script>
    <style>
        html,
        body {
            position: relative;
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
    <?php
    $bannerimg = [
        "compok",
        "vrok",
        "game",
        "monitor",
        "Naamloos",
        "nerdok",
        "speak",
        "toyok",
        "vrok"
    ]
    ?>
</head>

<body>
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
    <?php
    for($i = 0; $i < count($bannerimg); $i++){
        print(
        "<div class=\"swiper-slide\">
            <a href=\"search.html\"> "
        );
        print ("<img src=\"banner/$bannerimg[$i].jpg\">");
        print("</a>
        </div>");
    }
    ?>

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