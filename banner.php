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
            overflow: hidden;
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
        .product-prijs {
            position: absolute;
            bottom: 0;
            right: 0;
            margin: 40px;
            margin-right: 96px;
        }
    </style>
    <?php
    include 'dbConnction.php';
    include 'conf.php';
    if(is_numeric($userid)){
        $sql = "SELECT *, COUNT(*) AS order_count 
FROM nerdy_gadgets_start.order O 
JOIN user U ON U.id = O.user_id 
JOIN order_item OI ON OI.order_id = O.id 
JOIN Product P ON P.id = OI.product_id 
WHERE U.id = $userid
GROUP BY O.id, category, U.id, U.email 
ORDER BY order_count desc 
LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    ?>


</head>

<body>
<div class="swiper mySwiper">
    <div class="swiper-wrapper" >

    <?php
    if (is_numeric($userid)) {
        $ea = $userid % 1000;
        if ($ea === 0) {
            $ea = 0;
        }
    }
    if($userid !== "Guest"){
        $aantalea = 2;
        $easql = "SELECT easter FROM user WHERE id = $userid";
        $resultea = mysqli_query($conn, $easql);
        $rowsea = mysqli_fetch_all($resultea, MYSQLI_ASSOC);
        for ($i = 0; $i < count($rowsea); $i++){
            if ($rowsea[$i]['easter'] == "Yes"){
                $egg = "Yes";
            }
        }
        if (empty($rowsea)) {
            $egg = "No";
        }
        if ($ea == 0 && $egg !== "Yes"){
            print("<form id=\"EaForm\">
        <input type=\"radio\" checked id=\"eacheck\" value=\"Yes\" style=\"display: none\" name=\"easter\">
        <label for=\"eacheck\" style=\"display: none\"></label>
    </form>");
            print("<div class=\"swiper-slide\" style='object-fit: contain'>
            <img src=\"banner/images/easteregg1.jpg\"></a>
        </div>");
            print("<div class=\"swiper-slide\" style='object-fit: contain'>
            <a href=\"$rick\" onclick=\"submitEA()\"><img src=\"banner/images/easteregg2.jpg\" onclick=\"submitEA()\"></a>
        </div>");}
    } elseif (is_numeric($userid)) {
        for($i = 0; $i < count($rows); $i++){
            foreach($rows[$i] as $rij => $waarde){
                if($rij == 'category') {
                    $category = $waarde;
                    if ($category == 'desktops'){
                        print(
                        "<div class=\"swiper-slide\" style='object-fit: contain'>
            <a href=\"search.php\"><img src=\"banner/images/monitor.jpg\"></a>
        </div><div class=\"swiper-slide\" style='object-fit: contain'>
            <a href=\"search.php\"><img src=\"banner/images/compok.jpg\"></a>
        </div>");
                    } else{
                        print(
                        "<div class=\"swiper-slide\" style='object-fit: contain'>
            <a href=\"search.php\"><img src=\"banner/images/$category.jpg\"></a>
        </div>");
                    }
                }
            }
        }
        $limit = 6;
        $sql2 = "SELECT * FROM Product WHERE category = '$category' LIMIT $limit";
        $result2 = mysqli_query($conn, $sql2);
        $rows2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);
        for($i = 0; $i < count($rows2); $i++){
            $productName = $rows2[$i]['name'];
            $productImage = $rows2[$i]['image'];
            $productDescription = $rows2[$i]['description'];
            $productPrice = $rows2[$i]['price'];
            print(
            "<div class=\"swiper-slide\">
            <a href=\"search.php\" class=\"product-link\">
                <div id=\"slidefoto\">
                    <img src=\"banner/images/$productImage.jpg\" alt=\"Laptop Image\">
                </div>
                <div class=\"product-info\" id=\"item-info\">
                    <h1 class=\"product\">$productName</h1>
                    <h1 class=\"product-prijs\">€$productPrice</h1>
                </div>
            </a>
        </div>");
        }
    }elseif ($userid == "Guest"){
        $sql2 = "SELECT DISTINCT category FROM Product";
        $result2 = mysqli_query($conn, $sql2);
        $rows2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);
        for($i = 0; $i < count($rows2); $i++){
            $productCategory = $rows2[$i]['category'];
            print(
                        "<div class=\"swiper-slide\" style='object-fit: contain'>
            <a href=\"search.php\"><img src=\"banner/images/$productCategory.jpg\"></a>
        </div>");
        }
    }

    ?>
        <script>
            function submitEA() {
                console.log("Submit EA Clicked");
                $.ajax({
                    type: "POST",
                    url: "process_banner.php",
                    data: $("#EaForm").serialize(),
                    success: function(response) {
                        console.log("AJAX Success:", response);
                    },
                    error: function(error) {
                        console.error("AJAX Error:", error);
                    }
                });
            }
        </script>
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