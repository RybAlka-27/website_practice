<?php
session_start();
if ($_SESSION['user']) {
    header('Location: main.php');
}
?>

<!-- Доюавить стили -->
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="js/jq.js"></script>
    <script src="js/main.js"></script>
</head>

<body>
    <form>
        <label>Имя</label>
        <input placeholder="Введите имя" name="name" type="text" required>
        <label>Фамилия</label>
        <input placeholder="Введите фамилию" name="surname" type="text" required>
        <label>Отчество</label>
        <input placeholder="Введите отчество" name="lastname" type="text" required>
        <label>Организация</label>
        <input placeholder="Введите организацию" name="org" type="text">
        <label>Логин</label>
        <input placeholder="Введите логин" name="login" type="text" required>
        <label>Пароль</label>
        <input placeholder="Введите пароль" name="password" type="password" required>
        <label>Подтверждение пароля</label>
        <input placeholder="Подтверлите пароль" name="conf_password" type="password" required>
        <button type="submit" class="reg-btn">Зарегистрироваться</button>
        <button type="reset">Очистить</button>
        <p class="msg none">Lorem ipsum.</p>
    </form>
</body>

</html>