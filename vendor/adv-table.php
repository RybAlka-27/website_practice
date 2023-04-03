<?php
    require_once("connect.php");

    $type_sql = $_POST['id'];
    // foreach ($_POST as $key => $value) {
    //     $type_sql = $value;
    // }
    $array = array();
    $query = mysqli_query($db, "SELECT * FROM planes WHERE name= '$type_sql'");
    while ($obr_query = mysqli_fetch_array($query)) {
        $name = $obr_query['name'];
        $year = $obr_query['year'];
        $country = $obr_query['country'];
        $price = $obr_query['price'];
        $seller = $obr_query['seller'];
        $type = $obr_query['type'];
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