<?php
include 'dbConnction.php';
$sql2 = "SELECT * FROM Product WHERE category = 'laptops' LIMIT 6";
$result2 = mysqli_query($conn, $sql2);
$rows2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);
print_r($rows2[1]['category']);

