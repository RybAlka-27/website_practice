<?php
    session_start();
    require_once("connect.php");

    function login($db,$login,$password) {
        $loginResult = mysqli_query($db,"SELECT * FROM auth WHERE login='$login' AND password='$password'");

        if(mysqli_num_rows($loginResult) > 0) {
            $user = mysqli_fetch_assoc($loginResult);
            $_SESSION['user'] = array(
                "name" => $user["name"],
                "surname" => $user["surname"],
                "lastname" => $user["lastname"],
                "organization" => $user["organization"],
                "login" => $user["login"],
                "paswword" => $user["password"],
            );
            $response = array(
                'status' => true,
                'message' => 'Авторизация прошла успушно',
            );
            echo json_encode($response);
            die();
        } else {
            $response = array(
                "status" => false,
                "message" => "Неправильный логин или пароль",
            );
            echo json_encode($response);
            unset($_SESSION['login'], $_SESSION['password']);
            die();
            // echo '<script> document.location.href = "../index.php"</script>';
        }
    }

    if(isset($_POST['login']) && isset($_POST['password'])) {
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['password'] = $_POST['password'];    
    }

    if(isset($_SESSION['login']) && isset($_SESSION['password'])) {
        if(login($db,$_SESSION['login'],$_SESSION['password'])) {
            exit();
        }
    }
?>