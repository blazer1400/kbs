<?php

session_start();

require('./db_connection.php');

if ($_POST['id']) {
    if (is_array($_SESSION['cart'])) {
        $_SESSION['cart'][] = $_POST['id'];
    } else {
        $_SESSION['cart'] = [$_POST['id']];
    }
} else {
    die('Geen product geselecteerd');
}