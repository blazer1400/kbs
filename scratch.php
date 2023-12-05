<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KBS</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="css/search.css" />
</head>
<body>
<form action="" method="get">
<div class="category">
<a href="#">Category</a>
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

        echo "<label>";
        echo "<input type='checkbox' " . (isset($_GET[$productCategory]) ? "checked='checked'" : "") . " onchange='this.form.submit()' name='$productCategory'>$productCategory";
        echo "</label>";


    }
    mysqli_close($connection);
    echo "</div>";
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
