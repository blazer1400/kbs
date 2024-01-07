<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KBS</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="css/search.css" />
</head>
<body>

    <?php include 'header.php';    ?>
    <?php
    $resultCategory = [];

    ?>

<div class="row">
    <div class="column side-left">
        <div class="filter-section">
            <h3>Filters</h3>


            <hr>
            <ul class="filter-options">
                <li>
                    <a href="#">Prijs</a>
                    <label>
                        <input>
                    </label>
                    <label>
                        <input>
                    </label>

                </li>
                <li>
                    <form action="" method="get">
                    <div class="category">
                        <a href="#">Category</a>
                        <?php
                        echo "";
                        $servername = "127.0.0.1";
                        $username = "root";
                        $password = "Lovesaraamal2001";
                        $dbname = "nerdy_gadgets";

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname,3306); // Connect direct met de database ipv alleen met SQL
                        // Check connection
                        echo "";
                        if ($conn->connect_error) {
                            echo "Connection failed: " . $conn->connect_error;
                            die("Connection failed: " . $conn->connect_error);
                        }

                        // QUERY
                        $sql = "SELECT DISTINCT category FROM product";
                        // RESULT
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // PRODUCT RASTER
                            echo '<div class="product-raster">';
                            $connection = mysqli_connect('127.0.0.1', 'root', $password, 'nerdy_gadgets', '3306');
                            $sql_selectALL = "SELECT * FROM product";
                            $res = mysqli_query($connection, $sql);

                            while ($row = mysqli_fetch_assoc($res)) {
                                $productCategory = $row["category"];
                                $resultCategory[] = $productCategory;
                                echo "<label>";
                                echo "<input type='checkbox' " . (isset($_GET[$productCategory]) ? "checked='checked'" : "") . " onchange='this.form.submit()' name='$productCategory'>$productCategory <br>";
                                echo "</label>";

                            }
                            mysqli_close($connection);
                            echo "</div>";
                        } else {
                            echo "0 results";

                        }
                        $conn->close();
                        ?>
                    </div>
                    </form>
                </li>
            </ul>
        </div>
    </div>

    <div class="column middle">
        <div class="content-wrapper">
            <?php
            $servername = "127.0.0.1";
            $username = "root";
            $password = "Lovesaraamal2001";
            $dbname = "nerdy_gadgets";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname, 3306); // Connect direct met de database ipv alleen met SQL
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            // echo "Connected successfully<br>";


            // QUERY
            $sqlConditite = "";
            $sqlCategorys = [];

            if(isset($_GET["$resultCategory[0]"])){
                $sqlCategorys[] = "laptops";
            }
            if(isset($_GET[$resultCategory[1]])){
                $sqlCategorys[] = "phones";
            }
            if(isset($_GET[$resultCategory[2]])){
                $sqlCategorys[] = "opslag";
            }
            if(isset($_GET[$resultCategory[3]])){
                $sqlCategorys[] = "routers";
            }
            if(isset($_GET[$resultCategory[4]])){
                $sqlCategorys[] = "componenten";
            }
            if(isset($_GET[$resultCategory[5]])){
                $sqlCategorys[] = "desktops";
            }

            if(count($sqlCategorys) == 1){
                $sqlStatement = $sqlCategorys[0];
                $sqlConditite = "WHERE category = '$sqlStatement'";
                $sql = "SELECT * FROM product $sqlConditite";
            }else if(count($sqlCategorys ) > 1){
                foreach ($sqlCategorys as $yuh){
                    echo "";
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
                    echo "<div class='content-img'><img src ='img/products/$productImage.jpg' alt='$productID'></div>";
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

<!--        <div class="show-more-section">-->
<!--            <button class="show-more-button">Show more</button>-->
<!--        </div>-->
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