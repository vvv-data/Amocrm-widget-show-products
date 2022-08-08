<?php
// директория - название файла в которой будет сохраняться токем, должно быть доступно для записи
define('TOKEN_FILE', 'tmp' . DIRECTORY_SEPARATOR . 'token_info.json');
// Integration ID: в настройках виджета
$clientId = 'frg345g6-btbt-btbtr8-6uua-ytuyjmuyru2';
// Secret key: в настройках виджета
$clientSecret = 'ufhgty9854yhgnrbviwpy498hbnvnvw8787435t349jokevnvihpbhoeyd';
// URL должен совпадать с тем, который вы указали в настройках интеграции для редиректа
$redirectUri = 'https://yourwebsite.ru/amocrm/login.php';

$baseDomain = 'yoursubdomain.amocrm.com'; // или yoursubdomain.amocrm.ru - ваша страница
// в $my_secret укажите свое значение такое же как в /widget/script.js - my_secret на 49 строке, чтобы закрыть доступ посторонним 
$my_secret = 'uirhgtrghjhbvtrgvbbv7494nce';
