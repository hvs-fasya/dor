<?php

require_once "config.php";

session_start();

header('content-type: text/html; charset: utf-8');

if (!empty($_POST))
{
    function prepare( $data = false ){
        $result = '';
        $pre = array();

        foreach( $data as $key => $value ){
            $p = $key . '=' . $value;
            $pre[] = $p;
        }

        return join( '&', $pre );
    }

    function GetRealIp()
    {
        $Ip = $_SERVER ["REMOTE_ADDR"];
        if (isset ($_SERVER ["HTTP_X_FORWARDED_FOR"])) {
            if (isset ($_SERVER ["HTTP_X_REAL_IP"]))
                $Ip = $_SERVER ["HTTP_X_REAL_IP"];
            else
                $Ip = $_SERVER ["HTTP_X_FORWARDED_FOR"];
        }
        return $Ip;
    }

    $wmid = $config['wmid'];

    $user_ip = GetRealIp();

    $labels = array(
        'spec' => 'Профиль услуги',
        'time' => 'Срочность',
        'city' => 'Город',
        'district' => 'Район',
        'destination' => 'Зарубежный регион'
    );

    # Default data

    $data = array(
        'form_page' => $_SERVER['HTTP_REFERER'],
        'client_ip' => $user_ip,
        'userid' => $wmid, /* Id под недвижимость */
        'product' => 'lawyer',
        'template' => 'default',
        'validation_request' => '0',
    );

    foreach( $_POST as $param => $value ){

        if( array_key_exists( $param, $labels ) ){
            $desc .= $labels[$param] . ': ' . $value . ' / ';
        }

        $data[$param] = $value;
    }

    $data['userid'] = $config['wmid'];

    if ( $data['region'] == "Неопределен"){
        $data['region'] = getRegionByPhone($data['phone']);
    }

    $url = "http://advertisers.leadia.ru/scripts/lead";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url); // set url to post to
    curl_setopt($ch, CURLOPT_FAILONERROR, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);// allow redirects
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); // return into a variable
    curl_setopt($ch, CURLOPT_TIMEOUT, 3); // times out after 4s
    curl_setopt($ch, CURLOPT_POST, 1); // set POST method
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data); // add POST fields
    $result = curl_exec($ch); // run the whole process
    print_r($result);
    curl_close($ch);
}

/**
 * Определяет регион по номеру телефона
 * @param $phone
 * @return mixed|string
 */
function getRegionByPhone($phone){

    $response = file_get_contents("http://geoip.leadia.ru/get_by_phone.php?phone=" . $phone);
    $region = json_decode($response);

    switch ($region->status){
        case 'ok':
            $region = $region->title;
            break;
        case 'not_found':
            $region = 'Москва';
            break;
        default:
            $region = 'Москва';
    }

    return $region;
}


