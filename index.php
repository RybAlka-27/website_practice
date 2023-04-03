<?php
session_start();
if ($_SESSION['user']) {
    header('Location: main.php');
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="js/jq.js"></script>
    <script src="js/main.js"></script>
</head>

<body>
    <form>
        <label>Логин</label>
        <input type="text" name="login" id="login" placeholder="Введите свой логин" required>
        <label>Пароль</label>
        <input type="password" name="password" id="password" placeholder="Введите пароль" required>
        <button type="submit" class="login-btn">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="reg.php">зарегистрируйтесь</a>!
        </p>
        <p class="msg none">Lorem ipsum dolor sit amet.</p>
    </form>
</body>

</html>