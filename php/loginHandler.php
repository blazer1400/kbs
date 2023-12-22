<?php

require('db_connection.php');

session_start();


foreach ($_POST as $item) {
    $item = addslashes($item);
}

$query = $conn->query("SELECT * FROM user WHERE email = '" . $_POST['email'] ."'");

if ($query) {
    $row = $query->fetch_array();
    if (password_verify($_POST['password'], $row['password'])) {
        $_SESSION['user_id'] = $row['id'];
        header('Location: ../index.php');
    }
}