<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="banner/banner.css" type="text/css">
    <link rel="stylesheet" href="banner/swiper.css" type="text/css">
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
            object-fit: contain;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            object-fit: cover;
            overflow: hidden; /* Ensure overflow is hidden to clip any part of the image that exceeds the slide */
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        .swiper-wrapper{
            object-fit: contain;
        }
    </style>
    <?php
    include 'dbConnction.php';
    $userid = rand(1,1000);
    $limit = 1;
    $sql = "SELECT *, COUNT(*) AS order_count 
FROM nerdy_gadgets_start.order O 
JOIN user U ON U.id = O.user_id 
JOIN order_item OI ON OI.order_id = O.id 
JOIN Product P ON P.id = OI.product_id 
WHERE U.id = $userid
GROUP BY O.id, category, U.id, U.email 
ORDER BY order_count desc 
LIMIT 1;";
    $result = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>


</head>

<body>
<div class="swiper mySwiper">
    <div class="swiper-wrapper" >
    <?php
    for($i = 0; $i < count($rows); $i++){
        foreach($rows[$i] as $rij => $waarde){
            if($rij == 'category'){
                $category = $waarde;
                print(
                "<div class=\"swiper-slide\" style='object-fit: contain'>
            <a href=\"search.html\"><img src=\"banner/images/$category.jpg\"></a>
        </div>");
            }
        }
    }
//    $category = 'routers';
    $sql2 = "SELECT * FROM Product WHERE category = '$category' LIMIT 6";
    $result2 = mysqli_query($conn, $sql2);
    $rows2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);
    for($i = 0; $i < count($rows2); $i++){
        foreach($rows2[$i] as $rij2 => $waarde3){
            if($rij2 == 'image'){
                print(
                "<div class=\"swiper-slide\">
            <a href=\"search.html\" class=\"product-link\">
                <div id=\"slidefoto\">
                    <img src=\"banner/images/$waarde3.jpg\" alt=\"Laptop Image\">
                </div>");
                print ("<div class=\"product-info\" id=\"item-info\">
                    <h1 class=\"product\">Laptop</h1>
                    <p class=\"omschrijving\">Dit is een laptop</p>
                    <h1 class=\"product-prijs\">Prijs</h1>
                </div>
            </a>
        </div>");
            }
        }
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