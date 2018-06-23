<?php
$name = 'Наталья';
$age = '28';
$email = 'seuakoatl@list.ru';
$city = 'Хабаровск';
$about = 'Я только что начала изучать курс PHP и JavaScript.'
?>

<!DOCTYPE>
<html lang="ru">
<head>
    <title><?= $name . ' – ' . $about ?></title>
    <meta charset="utf-8">
    <style>
        body {
            font-family: sans-serif;
        }
    </style>
</head>
<body>
<h1>Страница пользователя <?= $name ?></h1>
<dl>
    <dt>Имя</dt>
    <dd><?= $name ?></dd>
    <dt>Возраст</dt>
    <dd><?= $age ?></dd>
    <dt>Адрес электронной почты</dt>
    <dd><a href="mailto:<?= $email ?>"><?= $email ?></a></dd>
    <dt>Город</dt>
    <dd><?= $city ?></dd>
    <dt>О себе</dt>
    <dd><?= $about ?></dd>
</dl>
</body>
</html>