<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KBS</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="./css/index-update.css"/>
    <link rel="stylesheet" href="./banner/banner.css" type="text/css">
    <script src="https://cdn.tailwindcss.com"></script>
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
<?php include 'popup.php';
?>
<?php include('./header.php') ?>
<?php include 'banner.php';
?>

<div class="hr"></div>

<div class="flex items-center justify-center gap-8 px-8 h-96">
    <?php
    require('./php/db_connection.php');

    $query = $conn->query('SELECT * FROM product ORDER BY RAND() LIMIT 4');
    if ( $query ) {
        while ($row = $query->fetch_assoc()) {
            echo '<div class="bg-white pt-4 border flex flex-col shadow h-full w-full group cursor-pointer" onclick="window.location = `./product.php?id=` + ' . $row['id'] . '">
                        <div class="border-b pb-4 h-60 w-full flex items-center justify-center">
                            <img src="./img/products/' . $row['image'] . '.jpg" class="max-w-60 max-h-40 mx-auto " />
                        </div>
                     
                            <p class="mt-2 font-medium text-center">' . (strlen($row['name']) > 40 ? (str_split($row['name'], 40)[0] . '...') : $row['name']) . '</p>
                            <p class="text-[#6edce1] font-bold text-center">&euro; ' . $row['price'] . '</p>
                    
                        <div class="bg-[#6edce1] group-hover:bg-[#7DF9FF] w-full pl-4 mt-2 text-white pr-4 h-16 flex items-center justify-center gap-2">
                            Product bekijken
                            <i class="uil uil-angle-right"></i>         
                        </div>
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
    <?php
    include 'feedbackknop.php';
    ?>
</div>
</body>
</html>
