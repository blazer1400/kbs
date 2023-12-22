<?php

require('db_connection.php');

session_start();


foreach ($_POST as $item) {
    $item = addslashes($item);
}

$query = $conn->query("INSERT INTO user (email, password, first_name, surname_prefix, surname, street_name, apartment_nr, postal_code, city)" .
    "VALUES ('".$_POST['email']."', '".password_hash($_POST['password'], PASSWORD_DEFAULT)."', '".$_POST['first_name']."', '".substr($_POST['surname'], 0, 1)."', '".$_POST['surname']."', '".$_POST['street_name']."', '".$_POST['apartment_nr']."', '".$_POST['postal_code']."', '".$_POST['city']."')");

if ($query) {
    $_SESSION['user_id'] = $conn->query('SELECT LAST_INSERT_ID();')->fetch_row()[0];
    header("Location: ../index.php");
} else {
    print($conn->error);
}
