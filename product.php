<!-- DATABASE CONNECTIE -->
<?php

if (empty($_GET["id"])) {
    header('Location: ' . "search.php");
}

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

$id = $_GET["id"];
// QUERY
$sql = "SELECT * FROM product WHERE id=$id";
// RESULT
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $name = $row["name"];
        $description = $row["description"];
        $price = $row["price"];
        $category = $row["category"];
        $imgSrc = "img/products/" . $row["image"] . ".jpg";
    }
} else {
    echo "0 results";
}
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KBS</title>
    <link rel="stylesheet" href="css/search.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>
<body>

<?php include('./header.php'); ?>


<button class="p-2 ml-4 mt-4 bg-gray-100 hover:bg-gray-200 rounded" onclick="window.location = ''">
    <i class="uil uil-angle-left"></i>
    Terug
</button>

<div class="max-w-screen h-max grid grid-cols-10 justify-center m-16">
    <div class="w-full col-span-6">
        <img src="<?php echo $imgSrc;?>"/>
        <p class="text-xl font-semibold mt-8 border-b pb-8"><?php echo $name ?></p>
        <p class="mt-8"><?php echo $description ?></p>
    </div>
    <div class="col-span-1 flex items-center justify-center">
        <div class="h-full bg-gray-200 w-px"></div>
    </div>
    <div class="w-full py-4 col-span-3">
        <p class="font-bold mt-4 text-4xl text-white rounded-xl p-4 text-right w-max ml-auto bg-[#6edce1]">&euro; <?php echo $price ?></p>
        <button class="w-full p-4 bg-[#6edce1] hover:bg-[#7DF9FF] text-white rounded-lg mt-40 flex items-center gap-4 justify-center"
                onclick="window.location = './php/addToShoppingCart.php?id=' + <?php echo $id ?>">
            Toevoegen aan winkelwagen
            <i class="uil uil-shopping-basket"></i>
        </button>
    </div>
</div>




<div class="footer">
    <?php include 'footer.php';
    ?>
</div>
</body>
</html>