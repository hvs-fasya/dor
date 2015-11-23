<?php

    date_default_timezone_set('Europe/Moscow');

    $config = array(
        // ID WEBMASTER'a
        'wmid' => 3,

        // Номера телефонов
        'phones' => array(
            array(
                'region' => 'Москва',
                'phone' => '+7 (111) 111111'
            ),
            array(
                'region' => 'Санкт-Петербург',
                'phone' => '+7 (111) 111111'
            )
        )
    );


    if ($config['wmid'] == 2)
    {
        die('Укажите в config.php WEB_MASTER_ID');
    }
