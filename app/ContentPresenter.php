<?php
/**
 * Created by PhpStorm.
 * User: Vitalik
 * Date: 04.05.2015
 * Time: 23:40
 */

namespace App;


class ContentPresenter {

    /**
     * @var array
     */
    private $data;

    /**
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     *
     * @param $property
     * @return mixed
     */
    public function __get($property)
    {
        if (method_exists($this, $property))
        {
            return $this->{$property}();
        }

        return $this->data[$property];
    }

    /**
     *
     * @return string
     */
    public function title()
    {
        $key = capitalize_first($this->data['keyword']);
        //$postfix = (mb_strpos(mb_strtolower($key, 'UTF-8'), 'займ') === false) ? "Займ на Кашалот Финанс" : "Кашалот Финанс";
        //return "{$key} - {$postfix}";
        return $key;
    }
}