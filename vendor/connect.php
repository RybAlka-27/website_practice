<?php
    $db = mysqli_connect("localhost", "root", "");
    mysqli_select_db($db, "planemarket");
    mysqli_set_charset($db, "utf8");

    if (!$db) {
        die('Ошибка подключения к базе данных');
    }
?>