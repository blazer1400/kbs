<?php

session_start();

require('./db_connection.php');

if ($_GET['id']) {
    if (is_array($_SESSION['cart'])) {
        $_SESSION['cart'][] = $_GET['id'];
    } else {
        $_SESSION['cart'] = [$_GET['id']];
    }
    header('Location: ../product.php?id=' . $_GET['id']);
} else {
    die('Geen product geselecteerd');
}