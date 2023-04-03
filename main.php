<?php
session_start();

if (!$_SESSION['user']) {
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>PlaneMarket</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jq.js"></script>
    <script src="js/script.js"></script>
</head>

<body>
    <div id="body">
        <header>
            <div class="header">
                <a id="homepage" class="homepage" href="main.php">
                    <span class="plane">Plane</span> -
                    <span class="market">Market</span>
                </a>
                <p>Сайт объявлений для продажи самолетов</p>
            </div>
            <div>
                <a href="vendor/logout.php" class="logout">Выход</a>
                <a href="make_advert.php" class="logout">Добавить объявление</a>
            </div>
        </header>
    </div>
    <div id="menu">
        <ul>
            <li><a href="#" name="civil" onclick="on_Click(name)">Гражданские</a></li>
            <li><a href="#" name="cargo" onclick="on_Click(name)">Грузовые</a></li>
            <li><a href="#" name="general" onclick="on_Click(name)">Малая авиация</a></li>
            <li><a href="#" name="jet" onclick="on_Click(name)">Джеты</a></li>
        </ul>
    </div>
    <div id="field">
        <table id="table">
            <thead id="thead">
                <tr>
                    <th onclick="sortTable(0)">Название</th>
                    <th onclick="sortTable(1)">Год</th>
                    <th onclick="sortTable(2)">Страна</th>
                    <th onclick="sortTable(3)">Цена($)</th>
                    <th onclick="sortTable(4)">Продавец</th>
                    <th onclick="sortTable(5)">Тип</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</body>


</html>