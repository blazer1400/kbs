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
            <form action="" method="post">
            <hr>
            <ul class="filter-options">
                    <div class="category">
                        <p href="#">Category</p>
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

                        // QUERY
                        $sql = "SELECT DISTINCT category FROM product";
                        // RESULT
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // PRODUCT RASTER
                            echo '<div class="product-raster">';
                            $connection = mysqli_connect('127.0.0.1', 'root', '', 'nerdy_gadgets', '3306');
                            $sql_selectALL = "SELECT * FROM product";
                            $res = mysqli_query($connection, $sql);

                            while ($row = mysqli_fetch_assoc($res)) {
                                $productCategory = $row["category"];
                                $resultCategory[] = $productCategory;
                                echo "<label>";
                                echo "<input type='checkbox' " . (isset($_POST[$productCategory]) ? "checked='checked'" : "") . " onchange='this.form.submit()' name='$productCategory'>$productCategory <br>";
                                echo "</label>";

                            }
                            mysqli_close($connection);
                            echo "</div>";
                        } else {
                            echo "0 results";

                        }
                        $conn->close();
                        ?>
                        <hr>
                        <li>
                            <p href="#">Prijs</p>
                            <div class="prijsInput">
                                <label>
                                    <input type="number" class="inputPrijs" name="prijs-van" placeholder="prijs van"
                                        <?php
                                             if (isset($_POST["prijs-van"]))
                                                 echo 'value = "' . $_POST["prijs-van"] . '"';?>>
                                </label>
                                <p>t/m</p>
                                <label>
                                    <input type="number" class="inputPrijs" name="prijs-tot" placeholder="prijs tot"
                                        <?php
                                             if (isset($_POST["prijs-tot"]))
                                                 echo 'value = "' . $_POST["prijs-tot"] . '"';?>>
                                </label>
                            </div>
                        </li>

                    </div>


            </ul>
            </form>
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

            if(isset($_POST["$resultCategory[0]"])){
                $sqlCategorys[] = "laptops";
            }
            if(isset($_POST[$resultCategory[1]])){
                $sqlCategorys[] = "phones";
            }
            if(isset($_POST[$resultCategory[2]])){
                $sqlCategorys[] = "opslag";
            }
            if(isset($_POST[$resultCategory[3]])){
                $sqlCategorys[] = "routers";
            }
            if(isset($_POST[$resultCategory[4]])){
                $sqlCategorys[] = "componenten";
            }
            if(isset($_POST[$resultCategory[5]])){
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