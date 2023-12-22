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
</head>
<body>
<header>
    <div class="Upper-Section">
        <div class="headerContainer">
            <div class="loginButtons">
                <a href="./uitchecken" >Uitchecken</a>
                <a href="./login" >Login/Registratie</a>
            </div>
        </div>
    </div>
    <div class="Lower-Section">
        <div>
            <img class="homepage-Logo" src="img/Logo-NerdyGadgets.png" alt="Logo">
        </div>
        <div class="searchbarContainer">
                <span class="searchbar">
                    <i class="uil uil-search"></i>
                    <label for="searchbar"></label><input id="searchbar">
                </span>
        </div>
    </div>

</header>

<nav>
    <a href="./winkel">Winkel</a>
    <a href="./gadgets">Gadgets</a>
    <a href="./sale">Sale</a>
    <a href="./klantenservice">Klantenservice</a>
</nav>



    <h2><?php echo $name ?></h2><br>
    <h3><?php echo "Prijs: €$price" ?></h3><br>
    <h4><?php echo "Categorie: $category" ?></h4><br>
    <p><?php echo $description ?></p><br>
    <img src="<?php echo $imgSrc ?>" alt="<?php echo $name ?>"><br>




<div class="footer">
    <?php include 'footer.php';
    ?>
    <p>Footer</p>
</div>
</body>
</html>