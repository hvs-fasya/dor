<?php

namespace App\Console\Commands;

use App\Content;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class GenerateSitemapFileCommand extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a sitemap(.xml) file';

    // @TODO: Сделать из конфига
    protected $httpHost;

    public function __construct()
    {
        parent::__construct();
        $this->httpHost = config('custom_app.http_host');
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $this->sitemapInstall();
    }

    public function sitemapInstall()
    {
        // create new sitemap object
        $sitemap = App::make("sitemap");

        // Получить все ключи
        $keys = Content::whereStatus('published')->get(['keyword', 'url', 'cat_id', 'updated_at']);

        // Добавить ссылки в sitemap
        foreach ($keys as $key) {
            $url = 'http://'.$this->httpHost.'/'.$key->url;

            $date = $key->updated_at;
            $sitemap->add($url, $date, 'weekly', 1.0);
        }

        // generate your sitemap (format, filename)
        // this will generate file sitemap.xml to your public folder
        $sitemap->store('xml', 'sitemap');
    }

}