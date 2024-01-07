<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KBS</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="css/search.css"/>
</head>
<body>

<?php include 'header.php'; ?>
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
                            $sqlCategorys = [];
                            while ($row = mysqli_fetch_assoc($res)) {
                                $productCategory = $row["category"];
                                $resultCategory[] = $productCategory;

                                echo "<label>";
                                echo "<input type='checkbox' " . (isset($_POST[$productCategory])  ? "checked='checked'" : "") . (isset($_POST[$productCategory])  ? ($sqlCategorys[] = "$productCategory") : "")  .  " onchange='this.form.submit()' name='$productCategory'>$productCategory <br>";
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
                                            echo 'value = "' . $_POST["prijs-van"] . '"'; ?>>
                                </label>
                                <p>t/m</p>
                                <label>
                                    <input type="number" class="inputPrijs" name="prijs-tot" placeholder="prijs tot"
                                        <?php
                                        if (isset($_POST["prijs-tot"]))
                                            echo 'value = "' . $_POST["prijs-tot"] . '"'; ?>>
                                </label>
                                <br>

                            </div>
                            <label>
                                <input type="submit" class="submit-button" value="Toepassen">
                            </label>
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

            // ... (your existing code)

            // QUERY
            $sql_query = "SELECT * FROM product WHERE 1"; // Initial query

            if (count($sqlCategorys) == 1) {
                $sqlStatement = $sqlCategorys[0];
                $sqlConditite = " AND category = '$sqlStatement'";
                $sql_query .= $sqlConditite;
            } else if (count($sqlCategorys) > 1) {
                $categories = implode("','", $sqlCategorys);
                $sql_query .= " AND category IN ('$categories')";
            }

            // Check if price range is provided
            if (isset($_POST['prijs-van']) && isset($_POST['prijs-tot']))  {
                $prijsVan = $_POST['prijs-van'];
                $prijsTot = $_POST['prijs-tot'];
                if ($prijsTot == 404 || $prijsVan == 404){
                    echo "<h1 class='zero-results'>0 results</h1>";
                    return;
                }
                else if ($prijsVan !== '' && $prijsTot !== '') {
                    $sql_query .= " AND price BETWEEN $prijsVan AND $prijsTot";
                }
            }

            // RESULT
            $result = $conn->query($sql_query);

            if ($result->num_rows > 0) {
                // PRODUCT RASTER
                echo '<div class="product-raster">';
                // Use the existing connection object instead of creating a new one
                while ($row = $result->fetch_assoc()) {
                    $productID = $row["id"];
                    $productImage = $row["image"];
                    $productName = $row["name"];
                    $productCategory = $row["category"];
                    $productDesc = $row['description'];
                    $productPrice = $row['price'];

                    echo "<a href='product.php?id=$productID'>";
                    echo "<div class='content-box'>";
                    echo "<h3 class='content-name'>$productName</h3>";
                    echo "<div class='content-img'><img src ='img/product_images/$productImage.jpg' alt='$productID'></div>";
                    echo "<p class='content-price'>€$productPrice</p>";
                    echo "</div>";
                    echo "</a>";
                }
                echo "</div>";
            } else {
                echo "<h1 class='zero-results'>0 results</h1>";
            }
            $conn->close();
            ?>

        </div>
    </div>
</div>


<div>
    <?php include 'footer.php';
    ?>
</div>

</body>
</html>