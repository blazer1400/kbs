<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KBS</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="css/search.css" />
</head>
<body>

    <?php include 'header.php';
    ?>



<div class="row">
    <div class="column side-left">
        <div class="filter-section">
            <h3>Filters</h3>


            <hr>
            <ul class="filter-options">
                <li>
                    <a href="#">Prijs</a>
                    <div class="slidecontainer">
                        <label>
                            <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                        </label>
                    </div>

                </li>
                <hr>
                <li>
                    <div class="Bijzonderheden">
                        <a href="#">Bijzonderheden</a>
                        <label>
                            <input type="checkbox" value="Beeldstablisator">Beeldstabilisator<br>
                        </label>
                        <label>
                            <input type="checkbox" value="Bluetooth">Bluetooth<br>
                        </label>
                        <label>
                            <input type="checkbox" value="Draadloos-opladen">Draadloos opladen<br>
                        </label>
                        <label>
                            <input type="checkbox" value="Gezichtsherkenning">Gezichtsherkenning<br>
                        </label>
                    </div>
                </li>
                <hr>
                <li>
                    <form action="" method="get">
                    <div class="category">
                        <a href="#">Category</a>
                        <label>
                            <input type="checkbox" <?php if(isset($_GET["Laptops"])) echo "checked='checked'"; ?> onchange="this.form.submit()" name="Laptops">Laptops<br>
                        </label>
                        <label>
                            <input type="checkbox" <?php if(isset($_GET["Phones"])) echo "checked='checked'"; ?> onchange="this.form.submit()" name="Phones">Phones<br>
                        </label>
                        <label>
                            <input type="checkbox" <?php if(isset($_GET["Opslag"])) echo "checked='checked'"; ?> onchange="this.form.submit()" name="Opslag">Opslag<br>
                        </label>
                        <label>
                            <input type="checkbox" <?php if(isset($_GET["Routers"])) echo "checked='checked'"; ?> onchange="this.form.submit()" name="Routers">Routers<br>
                        </label>
                        <label>
                            <input type="checkbox" <?php if(isset($_GET["Componenten"])) echo "checked='checked'"; ?> onchange="this.form.submit()" name="Componenten">Componenten<br>
                        </label>
                        <label>
                            <input type="checkbox" <?php if(isset($_GET["Desktops"])) echo "checked='checked'"; ?> onchange="this.form.submit()" name="Desktops">Desktops<br>
                        </label>
                    </div>
                    </form>
                </li>
                <hr>
                <li>
                    <div class="Totale-opslag">
                        <a href="#">totale Opslagcapaciteit</a>
                        <label>
                            <input type="checkbox" value="64GB">64 GB<br>
                        </label>
                        <label>
                            <input type="checkbox" value="128GB">128 GB<br>
                        </label>
                        <label>
                            <input type="checkbox" value="156GB">256 GB<br>
                        </label>
                        <label>
                            <input type="checkbox" value="1TB">1 TB<br>
                        </label>
                    </div>
                </li>
                <hr>
                <li>
                    <div class="Aansluiting">
                        <a href="#">Aansluiting</a>
                        <label>
                            <input type="checkbox" value="64GB">USB-C<br>
                        </label>
                        <label>
                            <input type="checkbox" value="128GB">Lightning<br>
                        </label>
                        <label>
                            <input type="checkbox" value="156GB">Micro-USB<br>
                        </label>
                    </div>
                </li>
                <hr>
                <li><a href="#">Filter 5</a></li>
                <hr>
                <li><a href="#">Filter 6</a></li>
                <hr>
                <li><a href="#">Filter 7</a></li>
                <hr>
                <li><a href="#">Filter 8</a></li>
            </ul>
        </div>
    </div>

    <div class="column middle">
        <div class="content-wrapper">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "nerdy_gadgets";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname); // Connect direct met de database ipv alleen met SQL
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            // echo "Connected successfully<br>";


            // QUERY
            $sqlConditite = "";
            $sqlCategorys = [];

            $categoryChecked = 0;
            if(isset($_GET["Laptops"])){
                $sqlCategorys[] = "Laptops";
            }
            if(isset($_GET["Phones"])){
                $sqlCategorys[] = "Phones";
            }
            if(isset($_GET["Opslag"])){
                $sqlCategorys[] = "Opslag";
            }
            if(isset($_GET["Routers"])){
                $sqlCategorys[] = "Routers";
            }
            if(isset($_GET["Componenten"])){
                $sqlCategorys[] = "Componenten";
            }
            if(isset($_GET["Desktops"])){
                $sqlCategorys[] = "Desktops";
            }

            if(count($sqlCategorys) == 1){
                $sqlStatement = $sqlCategorys[0];
                $sqlConditite = "WHERE category = '$sqlStatement'";
                $sql = "SELECT * FROM product $sqlConditite";
            }else if(count($sqlCategorys ) > 1){
                foreach ($sqlCategorys as $yuh){
                    echo "<script type='text/javascript'>alert('$yuh');</script>";
                }
                $sql = "SELECT * FROM product";
            }else{
                $sql = "SELECT * FROM product";
            }
            // RESULT
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // PRODUCT RASTER
                echo '<div class="product-raster">';
                $connection = mysqli_connect('127.0.0.1', 'root', '', 'nerdy_gadgets', '3306');
                $sql_selectALL = "SELECT * FROM product";
                $res = mysqli_query($connection, $sql);

                while ($row = mysqli_fetch_assoc($res)) {
                    $productID = $row["id"];
                    $productImage = $row["image"];
                    $productName = $row["name"];
                    $productCategory = $row["category"];
                    $productDesc = $row['description'];
                    $productPrice = $row['price'];

                    echo "<a href='product.php?id=$productID'>";
                    echo "<div class='content-box'>";
//                    echo "<div class='content-category'>$productCategory;</div>";
                    echo "<h3 class='content-name'>$productName</h3>";
                    echo "<div class='content-img'><img src ='img/product_images/$productImage.jpg' alt='$productID'></div>";
                    echo "<p class='content-price'>€$productPrice</p>";
                    echo "</div>";
                    echo "</a>";
                }
                mysqli_close($connection);
                echo "</div>";
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>

        </div>

        <div class="show-more-section">
            <button class="show-more-button">Show more</button>
        </div>
    </div>

    <div class="column side-right">
        <div class="feedback">

        </div>
    </div>


</div>



<div >
    <?php include 'footer.php';
    ?>
</div>
</body>
</html>