<?php
/**
 * Created by PhpStorm.
 * User: Vitalik
 * Date: 06.10.2014
 * Time: 22:17
 */

namespace App\Services;


class WordFilterService
{
    //const word_pattern = "'/(?:^|\s)(%s\w*)[ \n\r,]+/ui'";
    const word_pattern = '/(?:^|[\s."\'!?,-:;)(])(%s\w*)(?:$|[\s."\'!?,-:;)(]+)/ui';

    /**
     * Стоп слова - (ввиде регулярок)
    */
    protected static $wpatterns = [
        'жопа',
        'бля',
        'секс',
        'ху(й|и|я|е)',
        'сос(ать|ка)',
        'пизд',
        'г(а|о)вн',
        'порно',
        '(ё|е)б',
        'пр(о|а)ст(и|е)тут',
        'шлю(х|ш)',
        'шалав',
        'еба(т|н|л|ш)',
        'ебла',
        'анальн',
        'бдсм',
        'бзд(а|е|у)',
        'вагин',
        'вибратор',
        'влагалищ',
        'выеб',
        'перд',
        'перну',
        'гандон',
        'п(и|е)д(а|о)р',
        'педик',
        'сра(т|н|л)',
        'сра(л|н)',
        'гнида',
        'г(а|о)вен',
        'дриста',
        'дроч',
        'залуп',
        'сери(т|л)',
        'зоофил',
        'педофил',
        'ибон(е|а)х',
        'клит(о|е)р',
        'курв(а|ы|и|о)',
        'лошар',
        'мудак',
        'ебок',
        'с(с|ц)а(т|л)',
        'ебуч',
        'оргия',
        'оргаз',
        'свинегр',
        'сквирт',
        'сиськ',
        'сперм',
        'страпон',
        'сучар',
        'топлес',
        'трансвести',
        'трах',
        'триппер',
        'фаллос',
        'фистинг',
        'хер(н|ов)',
        'эроти(к|ч)',
        'http',
        '.ru',
        '.com',
        'www.',
    ];

    /**
     * Проверяет содержит ли текст стоп-слово
     *
     * @param $text
     * @return bool
     */
    public static function check($text)
    {
        foreach (self::$wpatterns as $stop_word) {
            $regex = sprintf(self::word_pattern, $stop_word);

            if (preg_match_all($regex, $text, $matches)){
                return false;
            }
        }

        return true;
    }
} 