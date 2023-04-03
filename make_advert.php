<!-- добавить стили -->
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>Новое объявление</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="js/script.js"></script>
</head>

<body>
    <form>
        <div>
            <label>Название самолета</label>
            <input name="name" type="text" placeholder="Введите название самолета" >
        </div>
        <div>
            <label>Год</label>
            <input name="year" type="number" placeholder="Введите год выпуска">
        </div>
        <div>
            <label>Страна производитель</label>
            <input name="country" type="text" placeholder="Введите страну производитея">
        </div>
        <div>
            <label>Цена</label>
            <input name="price" type="number" placeholder="Введите цену">
        </div>
        <div>
            <label>Продавец</label>
            <input name="seller" type="text" placeholder="Введите продавца" >
        </div>
        <div>
            <label>Тип</label>
            <input name="type" type="text" placeholder="Введите тип самолета">
        </div>
        <div>
            <label>Загрузите фотографии</label>
            <input name="photo" type="file">
        </div>
        <div>
            <label>Описание</label>
            <textarea name="rewiew" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <p></p>
            <button type="submit">Зарегистрироваться</button>
            <button type="reset">Очистить</button>
        </div>
    </form>
</body>

</html>