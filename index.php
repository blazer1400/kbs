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
        <img class="homepage-Logo" src="img/Logo-NerdyGadgets.png" alt="Logo">
        <div class="headerContainer">
            <div class="loginButtons">
                <a href="./uitchecken">Uitchecken</a>
                <?php

                require('./php/db_connection.php');
                session_start();

                if (empty($_SESSION['user_id'])) {
                    echo '<a href="./login.php">Login/Registratie</a>';
                } else {
                    $name = $conn->query("SELECT first_name, surname FROM user WHERE id = " . $_SESSION['user_id'])->fetch_row();
                    echo '<a href="./php/logout.php">Uitloggen</a>
                <div class="flex items-center gap-1">
                    <i class="uil uil-user"></i>
                    <p>'.(strtoupper(substr($name[0], 0, 1)) . substr($name[0], 1)).' '.(strtoupper(substr($name[1], 0, 1)) . substr($name[1], 1)).'</p>
                </div>';
                }


                ?>
            </div>
        </div>
    </div>
    <div class="Lower-Section">
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
    <?php
    require('./php/db_connection.php');

    $query = $conn->query('SELECT * FROM product ORDER BY RAND() LIMIT 4');
    if ($query) {
        while ($row = $query->fetch_assoc()) {
            echo '<div class="productContainer">
                        <div class="productImg">
                            <img src="./img/products/' . $row['image'] . '.jpg" />
                        </div>
                        <p class="title">' . $row['name'] . '</p>
                        <p class="price">&euro; ' . $row['price'] . '</p>
                        <form method="POST" action="./php/addToShoppingCart.php">
                            <input hidden value="' . $row['id'] . '" name="id" />
                            <button type="submit" class="shoppingCartButton">
                                <span>Aan winkelwagen toevoegen</span>
                                <i class="uil uil-shopping-basket"></i>
                            </input>
                        </form>
                    </div>';
        }
    } else {
        die($conn->error);
    }

    ?>
</div>

<div class="footer">
    <div class="navigation">
        <a href="./terms-and-conditions">Algemene voorwaarden</a>
        <a href="./account">Accountgegevens</a>
        <a href="./cookies">Cookie-instellingen</a>
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
