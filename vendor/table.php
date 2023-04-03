<?php
    require_once("connect.php");

    $type_sql = $_POST["id"];
    if ($type_sql == "civil") {
        $type_sql = "Гражданский";
    } elseif ($type_sql == "cargo") {
        $type_sql = "Грузовой";
    } elseif ($type_sql == "general") {
        $type_sql = "Малая авиация";
    } elseif ($type_sql == "jet") {
        $type_sql = "Джет";
    }

    $k = 0;
    $array = array();
    $query = mysqli_query($db, "SELECT * FROM planes WHERE type = '$type_sql'");
    while ($obr_query = mysqli_fetch_array($query)) {
        $name[$k] = $obr_query['name'];
        $year[$k] = $obr_query['year'];
        $country[$k] = $obr_query['country'];
        $price[$k] = $obr_query['price'];
        $seller[$k] = $obr_query['seller'];
        $type[$k] = $obr_query['type'];
        $k++;
    }

    $array += array(
        'name' => $name,
        'year' => $year,
        'country' => $country,
        'price' => $price,
        'seller' => $seller,
        'type' => $type,
    );

    echo json_encode($array);
    
?>