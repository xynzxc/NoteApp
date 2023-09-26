<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание заметки</title>
</head>

<body>
    <h2 class="title">Создание заметки</h2>
    <form class="form" action="">
        <div class="form__group">
            <input type="text" name="title" id="title" class="form__input" placeholder="Название заметки">
        </div>
        <div class="form__group">
            <textarea name="content" id="content" cols="30" rows="10" class="form__textarea" placeholder="Содержимое заметки"></textarea>
        </div>
        <div class="form__group"></div>
    </form>
    <button type="submit">Создать</button>
</body>

</html>