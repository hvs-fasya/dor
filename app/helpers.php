<?php
/**
 * Created by PhpStorm.
 * User: VpE4
 * Date: 30.04.2015
 * Time: 13:20
 */

function GetUserIp()
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

/**
 *
 * @param $str
 * @param string $encoding
 * @param bool $lower_str_end
 * @return string
 */
function capitalize_first($str, $encoding = "UTF-8", $lower_str_end = false)
{

    $first_letter = mb_strtoupper(mb_substr($str, 0, 1, $encoding), $encoding);
    if ($lower_str_end) {
        $str_end = mb_strtolower(mb_substr($str, 1, mb_strlen($str, $encoding), $encoding), $encoding);
    } else {
        $str_end = mb_substr($str, 1, mb_strlen($str, $encoding), $encoding);
    }
    $str = $first_letter . $str_end;
    return $str;
}

/**
 *
 * @param $d
 * @return bool|string
 */
function dateStringToSql($d)
{
    if (!preg_match('/^(\d\d)\/(\d\d)\/(\d\d\d\d)$/', $d, $out)) return false;

    return date('Y-m-d', mktime(0, 0, 0, $out[2], $out[1], $out[3]));
}


/**
 *
 * @param $title
 * @param string $separator
 * @return mixed|string
 */
function rus_slug($title, $separator = '-')
{
    $converter = array(
        'а' => 'a',   'б' => 'b',   'в' => 'v',
        'г' => 'g',   'д' => 'd',   'е' => 'e',
        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
        'и' => 'i',   'й' => 'y',   'к' => 'k',
        'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',
        'с' => 's',   'т' => 't',   'у' => 'u',
        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
        'ь' => '',  'ы' => 'y',   'ъ' => '',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya',

        'А' => 'A',   'Б' => 'B',   'В' => 'V',
        'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
        'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
        'И' => 'I',   'Й' => 'Y',   'К' => 'K',
        'Л' => 'L',   'М' => 'M',   'Н' => 'N',
        'О' => 'O',   'П' => 'P',   'Р' => 'R',
        'С' => 'S',   'Т' => 'T',   'У' => 'U',
        'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
        'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
        'Ь' => '',  'Ы' => 'Y',   'Ъ' => '',
        'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
    );

    $str = strtr($title, $converter);

    $str = strtolower($str);

    // заменям все ненужное нам на "-"
    $str = preg_replace('~[^-a-z0-9_]+~u', '-', $str);

    // удаляем начальные и конечные '-'
    $str = trim($str, $separator);

    return $str;
}

if (! function_exists('pre')) {
    function pre($param)
    {
        echo "<pre>";
        print_r($param);
        echo "</pre>";
    }
}

if (! function_exists('pred')) {
    function pred($param)
    {
        pre($param);
        die;
    }
}

if (! function_exists('vre')) {
    function vre($param)
    {
        echo "<pre>";
        var_dump($param);
        echo "</pre>";
    }
}

if (! function_exists('vred')) {
    function vred($param)
    {
        vre($param);
        die;
    }
}

if (! function_exists('project_path')) {
    /**
     * Get the path to the storage folder.
     *
     * @param  string  $path
     * @return string
     */
    function project_path($path = '')
    {
        return realpath(base_path('resources/projects/'.config('custom_app.http_host')));
    }
}

if (! function_exists('getProjectsDirNames')) {
    function getProjectsDirNames()
    {
        $path = realpath(base_path() . '/resources/projects/');
        $d = dir($path);
        $pr = [];
        while (false !== ($entry = $d->read())) {
            if ($entry != '.' && $entry != '..') {
                $pr[] = $entry;
            }
        }
        $d->close();
        return $pr;
    }
}