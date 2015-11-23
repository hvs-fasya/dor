<?php

return [
    'http_host' => env('C_APP_HOST', 'ofis-pravo.ru'), // Хост проекта (Домен)
    'subaccount' => env('C_APP_SUBACCOUNT', 'ofispravo'), // Параметр, при отправке лида (От названия сайта)
    'title_main' => env('C_APP_TITLE', 'Защита прав потребителей в Москве'), // Тайтл главной страницы
    'title_additive' => env('C_APP_TITLE_ADDITIVE', 'юристы онлайн 24/7'), // Присадка для тайтлов
];