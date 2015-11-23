<?php
/**
 * Created by PhpStorm.
 * User: Vitalik
 * Date: 04.05.2015
 * Time: 0:32
 */

namespace App\Http\Controllers;
use App\Content;
use App\ContentPresenter;
use App\Services\ContentService;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;

/**
 * Контент по ключевым словам
 *
 * Class ContentController
 * @package App\Http\Controllers
 */
class ContentController extends Controller
{
    protected $contentService;

    public function __construct(ContentService $contentService)
    {
        parent::__construct();
        $this->contentService = $contentService;
    }

    public function getKeyword($keyword)
    {
        // Получить данные по ключу
        $data = $this->contentService->getKeywordData($keyword);

        if (!$data) abort(404);

        return view('keyword', [
            'data' => new ContentPresenter($data)
        ]);
    }

    /**
     *
     * @param int $number
     * @return \Illuminate\View\View
     */
    public function sitemap($number=1)
    {
        $links = Content::customPaginate($number, 100);

        return view('sitemap', [
            'links' => $links,
            'number' => $number,
            'pageCount' => $links->lastPage()
        ]);
    }
}