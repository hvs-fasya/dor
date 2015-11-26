<?php
/**
 * Created by PhpStorm.
 * User: VpE4
 * Date: 30.04.2015
 * Time: 17:53
 */


namespace App\Console\Commands;

use App\Content;
use App\Services\ContentService;
use Illuminate\Console\Command;

class ContentParseCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'content:parse';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Collect content for keyword without data';
    /**
     * @var
     */
    private $contentService;

    /**
     *
     * @param ContentService $contentService
     */
    public function __construct(ContentService $contentService)
    {
        parent::__construct();
        $this->contentService = $contentService;
    }

    /**
     * Execute the console command.
     *
     * @throws Exception
     * @throws \Exception
     */
    public function fire()
    {
        $this->parseDataForMultiKeys(4);
    }

    /**
     * Метод парсинга ключа из БД
     */
    public function parseDataForOneKey()
    {
        $keyword = Content::getKeywordWithoutContent();

        $this->info("Найден ключ без контента: " . $keyword);

        if ($keyword) {
            $this->contentService->generateData($keyword);
            $this->info("Ключ: {$keyword->keyword} был обработан.");
        }
    }

    /**
     * Метод парсинга ключей из БД пачкой через sleep
     * @param int $limit
     * @param int $delay
     */
    public function parseDataForMultiKeys($limit = 2, $delay = 8)
    {
        $keywords = Content::whereStatus('published')
            ->where('has_content', '=', false)
            ->where('has_mail_otvet', '=', true)
            ->where('is_category', '!=', 1)
            ->limit($limit)
            ->get();

        foreach ($keywords as $keyword) {
            $this->info("Найден ключ без контента: " . $keyword);

            if ($keyword) {
                $this->contentService->generateData($keyword);
                $this->info("Ключ: {$keyword->keyword} был обработан.");
            }
            sleep($delay);
        }
    }

}
