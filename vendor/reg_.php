<?php
    session_start();
    require_once("connect.php");

    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $lastname = $_POST["lastname"];
    $org = $_POST["org"];
    $login = $_POST["login"];
    $pass = $_POST["paswword"];
    $conf_pass = $_POST["conf_paswword"];  

    $check_login = mysqli_query($db, "SELECT * FROM auth WHERE login = '$login'");
    if (mysqli_num_rows($check_login) > 0) {
        $response = array(
            "status" => false,
            "type" => 1,
            "message" => "Такой логин уже существует",
        );
        echo json_encode($response);
        die();
    } else {
        if ($conf_pass === $pass) {
            $pass = md5($pass);
            $query = mysqli_query($db, "INSERT INTO auth (login, password, name, surname, lastname, organization) VALUES ('$login', '$pass', '$name', '$surname', '$lastname', '$org')");
            $response = array(
                "status" => true,
                "message" => "Регистрация прошла успушно",
            );
            echo json_encode($response);
        } else {
            $response = array(
                "status" => false,
                "type" => 2,
                "message" => "Пароли не совпадают",
            );
            echo json_encode($response);
        }
    }
?>