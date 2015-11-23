<?php
/**
 * Created by PhpStorm.
 * User: VpE4
 * Date: 10.02.2015
 * Time: 16:30
 */

namespace App\Services;

/**
 * Class ArticleService
 *
 * @package Fakefeed
 */
class ArticleService {

    /**
     * Статьи
     *
     * @var array
     */
    protected $articles = [
        'blagodarja_vashim_juristam_moej_firme_vernuli_dolgi' => [
                'title' => 'Возврат долгов',
                'template' => 'vernuli-dolgi'
            ],
        'v_blagodarnost_juristam_czpp_za_to,_chto_vernuli_moemu_synu_nasledstvo_pogibshego_otca' => [
                'title' => 'Оформление наследства',
                'template' => 'vernuli-nasledstvo'
            ],
        'v_czpp_pomogli_vernut_magazinu_slomannoe_massazhnoe_kreslo' => [
                'title' => 'Возврат мебели',
                'template' => 'slomanoe_masaj_kreslo'
            ],
        'razvod_bez_vjezda_na_rodinu' => [
                'title' => 'Оформление развода',
                'template' => 'razvod_bez_vjezda_na_rodinu'
            ],
        'plohoj_poshiv_shtor' => [
                'title' => 'Вернуть деньги за некачественную услугу',
                'template' => 'plohoj_poshiv_shtor'
            ],
        'polomanaia_potarapannaia_mebeli' => [
                'title' => 'Возврат некачественной мебели',
                'template' => 'polomanaia_potarapannaia_mebeli'
            ],
        'polomanii_notebook' => [
                'title' => 'Возврат ноутбука',
                'template' => 'polomanii_notebook'
            ],
        'remont_v_kvartire' => [
                'title' => 'Вернуть деньги за некачественный ремонт',
                'template' => 'remont_v_kvartire'
            ],
    ];

    /**
     * Проверить если статья существует
     *
     * @param $name
     * @return bool
     */
    protected function check($name)
    {
        return array_key_exists($name, $this->articles);
    }

    /**
     * Возвращает статью
     *
     * @param $name
     * @return bool|array
     */
    public function take($name)
    {
        if (! $this->check($name)) return false;

        return [
            'title' => $this->articles[$name]['title'],
            'template' => $this->articles[$name]['template'],
        ];
    }

    /**
     * Возвращает ключи статей, для построения ссылок
     *
     * @return array
     */
    public function names()
    {
        return array_keys($this->articles);
    }


    /**
     * Все ссылки на статьи
     *
     * @return array
     */
    public function urls()
    {
        $urls = [];
        foreach ($this->articles as $name => $article)
        {
            $urls[] = [
                'href' => "/art/$name",
                'title' => $article['title']
            ];
        }
        return $urls;
    }
}