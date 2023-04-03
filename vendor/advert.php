<?php
    session_start();
    require_once("connect.php");

    $name = $_POST['name'];
    $year = $_POST["year"];
    $country = $_POST["country"];
    $price = $_POST["price"];
    $type = $_POST["type"];
    $photo = $_POST["photo"];
    $rewiew = $_POST["rewiew"];

    $query = mysqli_query($db, "INSERT INTO planes (name, year, country, price, type) 
        VALUES ('$name', '$year', '$country', '$price', '$type')");
    
?>