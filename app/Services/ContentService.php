<?php
/**
 * Created by PhpStorm.
 * User: VpE4
 * Date: 23.09.2014
 * Time: 12:12
 */

namespace App\Services;

use App\Content;

class ContentService
{
    /**
     * @var FakeUser
    */
    protected $faker;

    /**
     * Метод получения данных по ключевому слову
     * @param $keyword
     * @return array (контент)
     */
    public function getKeywordData($keyword)
    {
        try {
            $kw = Content::query()->whereUrl(trim($keyword))->whereStatus('published')->firstOrFail();

            $kw = $this->generateData($kw);

            $links = Content::whereIn('id', explode(',', $kw->links))->get(['keyword', 'url']);
            //$links = Content::where('cat_id', '=', $kw->cat_id)->where('id', '!=', $kw->id)->get(['keyword', 'url']);

            return [
                'keyword' => $kw->keyword,
                'content' => json_decode($kw->data),
                'links' => $links
            ];

        } catch (ModelNotFoundException $e) {
            echo $e->getMessage();
            return false;
        } catch (\Exception $e){
            echo $e->getMessage();
            return false;
        }

    }

    /**
     * Построить данные для фида
     *
     * массив:
     * __________________________
     *      вопрос
     *          - содержание
     *          - лучший ответ
     *          - ответ
     *          - автор:
     *              - имя фамилия
     *              - аватарка
     *
     * @param $data
     * @return array
     */
    public function createContent($data)
    {
        $content = [];
        $generalLength = 0;
        foreach ($data as $question)
        {
            $item = [
                'question' => $this->purify(isset($question->question) ? $question->question:""),
                'banswer' => $this->purify(isset($question->banswer) ? $question->banswer:""),
                'answer' => $this->purify(isset($question->answer) ? $question->answer:""),
                'user' => FakeUserService::getRandomName(),
                'region' => FakeUserService::getRandomRegion(),
            ];

            $encoding = 'UTF-8';
            $generalLength += mb_strlen($item['question'], $encoding);
            $generalLength += mb_strlen($item['answer'], $encoding);

            $content[] = $item;
        }
        if ($generalLength < 500) {
            return [];
        }
        return $content;
    }

    public function purify($str)
    {
        // В тэги html
        $str = str_replace('&lt;', '<', str_replace('&gt;', '>', $str));
        $strip_tags = strip_tags($str);

        $strip_tags = preg_replace('/\)\)+/ui','', $strip_tags); // Удалить смайлики

        if (WordFilterService::check($strip_tags)) // Проверка стоп-слова
        {
            return $strip_tags;
        }
        else
            // return  "<strong> сработал фильтр </strong>" . $strip_tags;
            // return  "<strong> сработал фильтр </strong>";
            return  "";
    }

    /**
     * @param $keyword
     * @return bool|mixed
     */
    public function parse($keyword)
    {
        $parser = new MailRuParser();

        $mailruData = $parser->get($keyword, 1);
        return $mailruData->results;
    }

    /**
     * Наполняет модель данными и генерирует ссылки
     * сохраняет в базу
     *
     * @param Content $kw
     * @return Content
     */
    public function generateData(Content $kw)
    {
        // Если данных нет спарсить данные и сохранить в базу
        if (empty($kw->data)) {

            $parsed_data = $this->parse($kw->keyword); // Спарсить с mail.ru
            $content = $this->createContent($parsed_data);

            // Если не нашлось контента - установить has_content и has_mail_otvet в false
            if (!count($content)) {
                $kw->fill([
                    'has_content' => false,
                    'has_mail_otvet' => false,
                    'status' => 'suspended'
                ]);
            } else {
                $kw->fill([
                    'has_content' => true,
                    'has_mail_otvet' => true
                ]);
            }

            // Записать в базу
            $kw->setAttribute('data', json_encode($content));

        }

        if (empty($kw->links)) {
            $ids = Content::whereStatus('published')->orderByRaw('RAND()')->take(20)->get(['id'])->lists('id');
            $kw->setAttribute('links', implode(',', $ids));
        }

        if (count($kw->getDirty())) $kw->save();

        return $kw;
    }

}