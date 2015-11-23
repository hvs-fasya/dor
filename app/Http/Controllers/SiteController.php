<?php
/**
 * Created by PhpStorm.
 * User: Vitalik
 * Date: 04.05.2015
 * Time: 0:24
 */

namespace App\Http\Controllers;
use App\Content;
use App\Services\ArticleService;
use App\Services\LeadService;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

/**
 * Class SiteController
 * @package App\Http\Controllers
 */
class SiteController extends Controller
{

    /**
     * Главная страница
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $links = Content::random(20);
        return view('index', ['links'=>$links]);
    }

    public function form()
    {
        return view('form');
    }

    public function hero()
    {
        return view('frames.hero');
    }

    public function loadhero()
    {
        return view('hero');
    }

    public function contact()
    {
        return view('contact');
    }

    public function checkProjectsStatus(Request $request)
    {
        $intPass = env('C_APP_ST_PASSWORD', 'asteroids_captain');
        //@TODO: Сделать отправку на почту
        $pass = $request->get('secret');
        if ($pass != $intPass) {
            abort(404);
        }

        $projects = getProjectsDirNames();

        $client = new Client();

        try {
            $projectsData = [];
            foreach($projects as $project)
            {
                $res = $client->get($project);
                $data = [
                    'project' => $project,
                    'status' => $res->getStatusCode(),
                ];
                $projectsData[$project] = $data;
            }
        } catch (RequestException $e) {
            echo $e->getRequest();
            if ($e->hasResponse()) {
                echo $e->getResponse();
            }
            die;
        }

        return view('projects_status', ['projectsData' => $projectsData]);
    }


    /**
     * @param $keyword
     * @return \Illuminate\View\View
     */
    public function articleShow($keyword)
    {
        $articleService = new ArticleService();

        $article = $articleService->take($keyword);

        # Если статья по данному ключу не существует -> 404
        if (! $article) abort(404);

        # Заголовок статьи
        $siteTitle = $article['title']  . " - Бесплатная юридическая консультация.";

        # Шаблон со статьей
        $article = 'articles.' . $article['template'];

        # Ссылки на все статьи
        $urls = $articleService->urls();

        return view('article', compact('article', 'siteTitle', 'urls'));
    }

    /**
     * Метод отправки лида
     * @param \Illuminate\Http\Request $request
     */
    public function sendFormLead(Request $request)
    {
        $leadService = new LeadService();
        $response = $leadService->sendLawyerLead($request);

        echo $response->getBody();
        //return $response;
    }

    public function thank(Request $request)
    {
        return view('thank');
    }
}