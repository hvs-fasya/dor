<?php
/**
 * Created by PhpStorm.
 * User: VpE4
 * Date: 22.09.2014
 * Time: 17:51
 */

namespace App\Services;

/***
 * Парсер ответов
 */

class MailRuParser {

    public $data_url = 'http://go.mail.ru/answer_json?q=%s&num=100&sf=%d';

    /**
     * Построить ссылку для получения ответов по ключевику
     * @param string $keyword ключевое слово
     * @param int $page номер страницы
     * @param int $q_per_page колтчество ответов на страницу
     * @return string  ссылка для получения ответов
     */
    private function buildUrl($keyword, $page = 0, $q_per_page = 100){

        $keyword = urlencode($keyword);
        return sprintf($this->data_url, $keyword, $page);
    }

    /***
     * Получает ответы ввиде json и декодирует в php
     *
     * @param $keyword
     * @param $page
     * @return bool|mixed
     */
    private function getJsonData($keyword, $page){

        $url = $this->buildUrl($keyword, $page);
        $data = file_get_contents($url);

        if ($data === false){
            return false;
        }else{
            return json_decode($data);
        }
    }

    /**
     *
     * @param $keyword
     * @param $page
     * @param $perpage
     *
     * @return bool|mixed
     */
    public function get($keyword, $page, $perpage = 100){
        return $this->getJsonData($keyword, $page);
    }

} 