<?php namespace App\Http\Controllers;

use App\Content;
use FastRoute\Route;
use Illuminate\Support\Facades\View;
use Laravel\Lumen\Routing\Controller as BaseController;

/**
 * Class Controller
 * @package App\Http\Controllers
 */
class Controller extends BaseController
{

    /**
     *
     */
    public function __construct()
    {
        //$this->prefixBodyWithClass();
        // Линки для футера
        //$this->getStaticLinks();
        View::share('site', $_SERVER['HTTP_HOST']);
        $this->shareConfigVars();
    }

    /**
     * Получить класс префикса в зависимости от route
     */
    private function prefixBodyWithClass()
    {
        # Соответствие роута css prefix
        $routeClassMap = [
            '/form'    => 'form_page',
            '/'        => '',
            'default'  => 'internal_page'
        ];

        # Имя текущего роута
        $currentRoute = app()->getPathInfo();

        # Получить класс префикс для текущего роута
        $bodyClass = array_key_exists($currentRoute, $routeClassMap)
            ? $routeClassMap[$currentRoute]
            : $routeClassMap['default'];

        View::share('bodyPrefixClass', $bodyClass);
    }

    protected function getStaticLinks()
    {
        $data = Content::getCatKeyws(10)->toArray();
        View::share('main_links', $data);
    }

    protected function shareConfigVars()
    {
        $config = [
            // ID WEBMASTER'a
            'wmid' => 3,

            // Номера телефонов
            'phones' => [
                [
                    'region' => 'Москва',
                    'phone' => '+7 (111) 111111'
                ],
                [
                    'region' => 'Санкт-Петербург',
                    'phone' => '+7 (111) 111111'
                ]
            ]
        ];

        View::share('config', $config);
    }
}
