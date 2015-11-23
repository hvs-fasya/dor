<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$app->group(['namespace' => 'App\Http\Controllers', 'middleware' => 'wm_params'], function($app) {

    // Главная страница
    $app->get('/', ['as' => 'site.index', 'uses' => 'SiteController@index']);

//    # Костыль нет опциональных параметров
//    $app->get('/sitemap/page/{number:[01]}', function(){
//        return redirect()->route('site.sitemap');
//    });

    // Sitemap
    $app->get('/sitemap', ['as' => 'site.sitemap', 'uses' => 'ContentController@sitemap']);
    $app->get('/sitemap/page/{number:[0-9]+}', ['as' => 'site.sitemap_paged', 'uses' => 'ContentController@sitemap']);

    # Form
    $app->get('/form', ['as' => 'site.form', 'uses' => 'SiteController@form']);
    $app->get('/thank', ['as' => 'site.thank', 'uses' => 'SiteController@thank']);
    //$app->get('/hero', ['as' => 'site.hero', 'uses' => 'SiteController@hero']);
    $app->post('/loadhero', ['as' => 'site.loadhero', 'uses' => 'SiteController@loadhero']);
    $app->get('/contact', ['as' => 'site.contact', 'uses' => 'SiteController@contact']);
    // Проверяем состояние доров
    $app->get('/check', ['as' => 'site.check', 'uses' => 'SiteController@checkProjectsStatus']);

    // Делаем редирект со страниц /art
    $app->get('/art', function(){
        return redirect('/');
    });
    $app->get('/art/{any}', function(){
        return redirect('/');
    });
    $app->get('/material', function(){
        return redirect('/');
    });
    $app->get('/material/{any}', function(){
        return redirect('/');
    });

    /*
   |--------------------------------------------------------------------------
   | Отправка лида
   |--------------------------------------------------------------------------
   */
    $app->post('/lead.php', ['as' => 'site.formlead', 'uses' => 'SiteController@sendFormLead']);

    $app->get('/{keyword}', ['as' => 'site.keyword', 'uses' => 'ContentController@getKeyword']);

});