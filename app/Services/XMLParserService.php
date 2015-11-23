<?php

namespace App\Services;

use HTMLPurifier;
use HTMLPurifier_Config;
use Illuminate\Http\Request;
use PHPExcel_Cell;
use PHPExcel_IOFactory;
use SimpleXMLElement;

/**
 * Class ImportService
 *
 */
class XMLParserService
{

    protected $encoding = 'UTF-8';

    public function purify($text)
    {

        // =============== Обработка текста: ===============
        // Удаляем тег <ul> и предложение перед ним.
        // Удаляем все теги (кроме p, br, h), но не их содержимое.
        // Все двойные и больше пробелы заменяем одинарными
        // Удалять предложение, если от точки до точки менее 30 символов.

        $hText = $this->clearFromTagUl($text);
        $hText = strip_tags($hText, '<p><br><br/><h1><h2><h3><h4><h5><h6>');
        $hText = $this->replaceMultiSpacesByOneSpace($hText);
        $hText = $this->removeShortSentences($hText);

        // Удалить смайлики
        $resText = preg_replace('/\)\)+/ui', '', $hText);

        return $resText;
    }

    /**
     * Метод очистки текста от <ul> тега и удаления перед <ul> последнего предложения.
     * @param $text
     * @return string
     */
    public function clearFromTagUl($text)
    {
        //$text = "<p>Для свидетельства о праве. Можно оформить обращение двумя разными документами или одним.</p><ul> <li>fdsfsdf</li> </ul> <p>Днем открытия наследства является день смерти гражданина.</p>";
        $splittedContent = preg_split('/<ul>.*?<\/ul>/is', $text);

        $numItems = count($splittedContent);
        $i = 0;
        $htext = '';
        // Удаляем последние предложения
        foreach($splittedContent as $tpart)
        {
            $strlen = mb_strlen($tpart, $this->encoding);
            if((++$i !== $numItems) && ($strlen >= 240)) {
                // Получаем позицию точки после последнего предложения.
                $pos = mb_strrpos($tpart, '.', null, $this->encoding);
                // Получаем позицию точки перед последним предложением.
                $pospre = mb_strrpos($tpart, '.', -($strlen-$pos+1), $this->encoding);
                // Получаем предложение между двумя точками
                $searchString = mb_substr($tpart, $pospre+1, $pos-$pospre, $this->encoding);
                // Удаляем предложение
                $tpart = str_replace($searchString, '', $tpart);
            }
            $htext .= $tpart;
        }

        return $htext;
    }

    public function replaceMultiSpacesByOneSpace($text)
    {
        return preg_replace('/\s{2,}/is', ' ', $text);
    }

    public function removeShortSentences($text)
    {
        $textParts = explode('.', $text);

        $nTextParts = [];
        foreach($textParts as $part)
        {
            if (mb_strlen($part, $this->encoding) >= 30) {
                $nTextParts[] = $part;
            }
        }

        return implode('.', $nTextParts);
    }

    /**
     * Метод получения куска текста длинною от 500 до 800 символов
     * @param string $text Входящий текст
     * @return string Обработанный кусок текста
     */
    public function getTextPiece($text)
    {
        $config = HTMLPurifier_Config::createDefault();
        if (defined('PURIFIER_CACHE')) {
            $config->set('Cache.SerializerPath', PURIFIER_CACHE);
        } else {
            # Disable the cache entirely
            $config->set('Cache.DefinitionImpl', null);
        }
        $purifier = new HTMLPurifier($config);

        $pos = mb_strpos($text, '<p>', null, $this->encoding);
        //$textPiece = mb_strimwidth($text, $pos, rand(500, 800), '', $encoding);
        $textPiece = mb_strimwidth($text, $pos, 800, '', $this->encoding);
        // Получаем позицию последней точки в тексте.
        $LastDotPosition = mb_strrpos($textPiece, '.', null, $this->encoding);

        // Если длина куска текста меньше 500 символов до последней точки, берем данный кусок текста
        if ($LastDotPosition >= 500) {
            $subTextPiece = mb_substr($textPiece, 0, $LastDotPosition+1, $this->encoding);
        } else {
            $subTextPiece = $textPiece;
        }

        // Чиним незакрытые теги.
        $subTextPiece = $purifier->purify($subTextPiece);

        return $subTextPiece;
    }

    public function parseFile()
    {
        $xmlFileName = 'xparser_example_article.xml';
        $xmlFilePath = storage_path('app').DIRECTORY_SEPARATOR.$xmlFileName;

        $content = file_get_contents($xmlFilePath);
        // <(.*?)>.*?<\/\1>
        preg_match_all('~\<content\>(.*?)\<\/content\>~is', $content, $matchesText);
        preg_match_all('~<title>(.*?)<\/title>~is', $content, $matchesTitle);

        $articlesArray = $matchesText[1];
        $titlesArray = $matchesTitle[1];

        $hTitlesArray = [];
        $finalText = '';
        foreach($articlesArray as $key => $article)
        {
            $hArticle = $this->purify($article);
            $articlePiece = $this->getTextPiece($hArticle);

            // Если одинаковые тайтлы не создаем h2 для них
            //if ($key && $titlesArray[$key] !== $titlesArray[$key-1]) {
            if (!$key || strcasecmp($titlesArray[$key], $titlesArray[$key-1]) !== 0) {
                $hTitlesArray[] = $titlesArray[$key];
                end($hTitlesArray);
                $articlePiece = "\n"."<h2 id=\"subtitle".key($hTitlesArray)."\">".$titlesArray[$key]."</h2>"."\n" . $articlePiece;
            }

            $finalText .= $articlePiece;
        }

//        ob_start();
//        $res = ob_get_contents();
//        ob_end_clean();

//        $fileContent = file_get_contents($xmlFilePath);
//        pred($fileContent);
//
//        $crawler = new Crawler($fileContent);
//        //$crawler->addXmlContent($fileContent);
//
//        //$res = $crawler->filter('content')->eq(0);
//        $res = $crawler->filter('article > title')->eq(0);
//        vred($res->text());
//
//        pred('AAA');
//
//
//        if (file_exists($xmlFilePath)) {
//            $xml = simplexml_load_file($xmlFilePath);
//            pred($xml);
//        } else {
//            exit('Не удалось открыть файл '.$xmlFileName);
//        }

        //$xml = new SimpleXMLElement($fileContent, null, true);
    }

}